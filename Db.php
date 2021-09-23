<?php
/**
 * Class Db
 *
 * Framework CASIPE
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2018 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

namespace core;


use \PDO;
use \PDOException;
use \PDOStatement;

class Db {

    private $conn = null;
    private $transBeginCount = 0;
    private $isConn = false;
    private $host;
    private $dbPort;
    private $dbName;
    private $dbUser;
    private $dbPassword;
    private $charset = 'utf8';
    private $dataBase = 'mysql';

    public function __construct($host = '', $dbName = '', $dbUser = '', $dbPassword = '', $dbPort = '') {

        $this->host = $host;
        $this->dbName = $dbName;
        $this->dbUser = $dbUser;
        $this->dbPassword = $dbPassword;
        $this->dbPort = $dbPort;

        if (!$this->isConn) {
            $this->connection();
        }
    }

    private function connection() {

        $timeout = 240;
        try {

            $stringDNS = $this->dataBase . ':';
            $stringDNS .= 'host=' . $this->host . ';';
            if ($this->dbPort) {
                $stringDNS .= 'port=' . $this->dbPort . ';';
            }
            $stringDNS .= 'dbname=' . $this->dbName . ';';
            $stringDNS .= 'charset=' . $this->charset . ';';

            $options = array(
                PDO::ATTR_PERSISTENT => false,
                PDO::ATTR_AUTOCOMMIT => false,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
                PDO::MYSQL_ATTR_FOUND_ROWS => true,
                PDO::ATTR_TIMEOUT => $timeout,
                PDO::MYSQL_ATTR_LOCAL_INFILE => true, //Load file for DB
            );

            if (version_compare(PHP_VERSION, '5.3.6', '<=')) {
                $options[PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES utf8";
                $options[PDO::ATTR_EMULATE_PREPARES] = false;
            }
            $this->conn = new PDO($stringDNS, $this->dbUser, $this->dbPassword, $options);
            $this->conn->exec("SET SESSION WAIT_TIMEOUT=300;");
//$this->conn->exec("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));"); //Desabilita restricao de GROUP BY

            $this->isConn = true;
        } catch (PDOException $e) {
            $this->errorConnection($e);
            return false;
        }
        return true;
    }

    private function checkConnection() {
        if ($this->conn == null) {
            throw new \Exception('The database connection has been closed');
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    /**
     * Setar banco de dados Ex.: mysql, sqlserver, oracle
     * @return void
     */
    public function setDataBase($dataBase) {
        $this->dataBase = $dataBase;
    }

    /**
     * Fecha os objetos de conexao com o banco de dados
     * @return Object ($this)
     */
    public function closeConnection() {
        $this->setAutoCommit(false);
        $this->conn = null;
        $this->isConn = false;
    }

    public function beginTransaction() {
        if (!$this->inTransaction()) {
            $this->checkConnection();
            return $this->conn->beginTransaction();
        }
    }

    private function inTransaction() {
        $this->checkConnection();
        return $this->conn->inTransaction();
    }

    public function commit() {
        $this->checkConnection();
        if ($this->inTransaction()) {
            return $this->conn->commit();
        }
    }

    public function rollBack() {
        if ($this->inTransaction()) {
            $this->checkConnection();
            return $this->conn->rollBack();
        }
    }

    public function insertID() {
        $this->checkConnection();
        $lastId = (int) $this->conn->lastInsertId();
        if (!$lastId) {
            $stmt = $this->conn->query("SELECT LAST_INSERT_ID()");
            $lastId = (int) $stmt->fetchColumn();
        }
        return $lastId;
    }

    public function setAutoCommit($flag = true) {
        $this->checkConnection();

        $this->conn->setAttribute(PDO::ATTR_AUTOCOMMIT, ($flag === true));
        $this->conn->setAttribute(PDO::ATTR_PERSISTENT, ($flag === true));
    }

    private function errorConnection($e = null) {
//header ('Content-type: text/html; charset=UTF-8');
//header ('Content-type: text/html; charset=ISO-8859-1');

        if (_DEBUG_DEV_) {
            $log = '<h4 align="center">Falha na conexao com o banco de dados(PDO):<br>';
            $log .= '<span style="color:#900;">' . utf8_decode($e->getMessage()) . "</span>";
            $log .= "<br><br>File: {$e->getFile()} ";
            $log .= "<br>Line: {$e->getLine()}</h4>";
            $msg = "<div style=\"clear:both;text-align:left; padding:5px; margin:15px;border:2px solid red;background:#FAE9E9; color:blue\">";
            $msg .= utf8_encode($log);
            $msg .= "</div>";
        } else {
            $msg = 'N�o foi poss�vel estabelacer conex�o com o servidor de banco de dados';
        }
        die($msg);
    }

    /**
     * 
     * @return mixed
     */
    public function execute($sql) {
        try {
            if ($sql) {
                $this->checkConnection();
                $res = $this->conn->exec($sql);
                if ($this->getNumberError()) {
                    $this->parseLog($this->getMsgError());
                    return false;
                } else {
                    return true;
                }
            }
        } catch (\Exception $e) {
            $this->parseLog($e);
        }
        return false;
    }

    public function prepare($query) {
        try {
            $this->checkConnection();
            if (method_exists($this->conn, 'prepare')) {
                $res = $this->conn->prepare($query);
                if ($this->getNumberError()) {
                    $this->parseLog($this->getMsgError());
                    return false;
                } else {
                    return $res;
                }
            }
        } catch (\Exception $e) {
            $this->parseLog($e);            
        }
        return false;
    }

    public function query($query) {
        try {
            $this->checkConnection();
            if (method_exists($this->conn, 'query')) {
                $res = $this->conn->query($query);
                if ($this->getNumberError()) {
                    throw new \Exception($this->getMsgError());
                }
                return $res;
            }
        } catch (\Exception $e) {
            $this->parseLog($e);
        }
        return false;
    }

    /**
     * 
     * @return array
     */
    public function fetchAll($sql) {
        try {
            if (!$sql) {
                return array();
            }
            if (substr_count(strtoupper($sql), 'SELECT') <= 0) {
                return array();
            }
            $stmt = $this->query($sql);
            $res = $this->fetchAssoc($stmt);
            $this->closeConnection();

            return $res;
        } catch (\Exception $e) {
            $this->parseLog($e);
        }
        return false;
    }

    /**
     * Realizar o comando DELETE no banco de dados
     * @return boolean ou rows: Linhas afetadas
     */
    public function delete($table, $where) {
        try {
            if ($where) {
                $query = "DELETE FROM `{$table}` WHERE " . $where;
                $this->execute($query);
                if ($this->getNumberError()) {
                    $this->parseLog($this->getMsgError());
                    return false;
                }
                return true;
            }
        } catch (\Exception $e) {
            $this->parseLog($e);
        }
        return false;
    }

    /**
     * Retorna o valor do atributo desejado
     * @return Object (fetchAll pdo) ou boolean
     */
    public function getValue($sql = null) {
        try {
            if ($sql != null) {
                $sql .= ' LIMIT 1';
                $query = $this->query($sql);
                if (method_exists($query, 'setFetchMode')) {
                    $query->setFetchMode(PDO::FETCH_ASSOC);
                    $result = $query->fetchAll();
//$this->closeConnection();
                    foreach ($result as $items) {
                        foreach ($items as $item) {
                            return $item;
                        }
                    }
                }
            }
        } catch (\Exception $e) {
            $this->parseLog($e);
            return false;
        }
        return '';
    }

    public function fetchAssoc($stmt) {
        try {
            if (!is_object($stmt)) {
                return array();
            }
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (!count($res)) {
                return array();
            }
        } catch (\Exception $e) {
            $this->parseLog($e);
            return false;
        }

        return $res;
    }

    private function errorInfo() {
        $this->checkConnection();
        if (method_exists($this->conn, 'errorInfo')) {
            return $this->conn->errorInfo();
        }
    }

    public function nextRow() {
        try {
            $this->checkConnection();
            if (method_exists($this->conn, 'nextRow')) {
                return $this->conn->nextRow();
            }
        } catch (\Exception $e) {
            $this->parseLog($e);
            return false;
        }
    }

    public function numRows($sql) {
        try {
            $this->checkConnection();
            if (!$sql || !method_exists($this->conn, 'query')) {
                return 0;
            }
            $statement = $this->conn->query($sql);

            return $this->rowAffected($statement);
        } catch (\Exception $e) {
            $this->parseLog($e);
        }
        return false;
    }

    public function rowAffected(\PDOStatement $statement) {
        return (int) $statement->rowCount();
    }

    public function getMsgError($query = null) {
        $error = $this->errorInfo();
        return ($error[0] == '00000') ? '' : $error[2] . ' ' . $query;
    }

    public function getNumberError() {
        $error = $this->errorInfo();
        return isset($error[1]) ? count($error) : 0;
    }

    /**
     * 
     * @return array
     */
    public function getRow($sql = null) {
        $res = array();
        try {
            if ($sql != null) {
                $query = $this->query($sql);
                if (method_exists($query, 'setFetchMode')) {
                    $query->setFetchMode(PDO::FETCH_ASSOC);
                    $res = $query->fetchAll();

                    $this->closeConnection();

                    if (is_array($res) && count($res)) {
                        return array_shift($res);
                    }
                }
            }
        } catch (\Exception $e) {
            $this->parseLog($e);
            return false;
        }
        return $res;
    }

    public function displayError($sql) {
        return debug_backtrace();
    }

    public function setDb($db_name) {
        $this->checkConnection();
        return $this->conn->exec('USE ' . escSQL($db_name));
    }

    public function checkCreatePrivilege($server, $user, $pwd, $db, $prefix, $engine = null) {

        $sql = 'CREATE TABLE `' . $prefix . 'test` (
                `test` tinyint(1) unsigned NOT NULL
                ) ENGINE=MyISAM';
        $result = $this->query($sql);
        if (!$result) {
            $error = $this->errorInfo();
            return $error[2];
        }
        $this->query('DROP TABLE `' . $prefix . 'test`');
        $this->closeConnection();
        return true;
    }

    public function getBestEngineMysql() {

        $value = 'InnoDB';

        $sql = 'SHOW VARIABLES WHERE Variable_name = \'have_innodb\'';
        $result = $this->query($sql);
        if (!$result)
            $value = 'MyISAM';
        $row = $result->fetch();
        if (!$row || strtolower($row['Value']) != 'yes')
            $value = 'MyISAM';

        /* MySQL >= 5.6 */
        $sql = 'SHOW ENGINES';
        $result = $this->query($sql);
        while ($row = $result->fetch())
            if ($row['Engine'] == 'InnoDB') {
                if (in_array($row['Support'], array('DEFAULT', 'YES'))) {
                    $value = 'InnoDB';
                }
                break;
            }
        return $value;
    }

    private function parseLog($e = null) {
        if (_DEBUG_DEV_) {
            if (gettype($e) == 'object') {
                throw new \Exception($e);
            } else {
                die("$e");
            }
        } else {
            if (gettype($e) == 'object') {
                $msgError = '';
                foreach ($e->getTrace() AS $item) {
                    $msgError .= "Path: " . $item['file'] . "\n";
                    $msgError .= "Line: " . $item['line'] . "\n";
                    if (!empty($item['function'])) {
                        $msgError .= "Function: " . $item['function'] . "\n";
                    }
                    if (!empty($item['class'])) {
                        $msgError .= "Class " . $item['class'] . "\n";
                    }
                    if (Tools::count($item['args'])) {
                        $msgError .= "Error:\n";
                        foreach ($item['args'] AS $i => $arg) {
                            $msgError .= "\t $i-" . $arg . "\n";
                        }
                    }
                    $msgError .= "\n\n\n";
                }
                $this->saveLog($msgError);
            } else {
                $this->saveLog($e);
            }
        }
    }

    private function saveLog($msgError = null) {
        if (!$msgError) {
            $err = $this->errorInfo();
            $msgError = ($err[0] == '00000') ? '' : 'SQL Error: ' . $err[2];
        }

        if ($msgError) {
            $filename = dirname(__FILE__) . "/log/logSQLError.log";
            $handle = @fopen($filename, 'a');
            @fwrite($handle, date('Y-m-d H:i:s') . "\n" . $msgError . "\n\n");
            @fclose($handle);
        }
    }

}
