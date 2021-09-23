<?php

/**
 * Class HelperDb
 *
 * Framework CASIPE
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2018 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

namespace core\helper;

use core\Db;
use core\Tools;

class HelperDb extends Db {

    protected $_query = null;
    protected $_sql = null;
    public $_tabela = null;
    protected $db = null;
    protected $errors = array();
    private $prefix;

    function __construct($dbSever = '', $dbName = '', $dbUser = '', $dbPassword = '') {
        if (parent::getConnection() == null) {
            $dbSever = ($dbSever == '') ? _DB_SERVER_ : $dbSever;
            $dbName = ($dbName == '') ? _DB_NAME_ : $dbName;
            $dbUser = ($dbUser == '') ? _DB_USER_ : $dbUser;
            $dbPassword = ($dbPassword == '') ? _DB_PASSWORD_ : $dbPassword;

            parent::__construct($dbSever, $dbName, $dbUser, $dbPassword);
        }
    }

    public function setPrefix($prefix) {
        return $this->prefix = $prefix;
    }

    private function getPrefix() {
        return $this->prefix;
    }

    /**
     * Realizar o comando INSERT no banco de dados
     * @return INT
     */
    public function insert($table, array $datas, $autoCommit = true) {

        $array_field = array();
        $array_bind = array();
        $array_value = array();
        foreach ($datas as $field => $value) {
            //if(!is_null($value))
            //{
            $array_field[] = $field;
            $array_bind[] = ':' . $field;
            $array_value[$field] = $value;
            //}
        }
        $fields = implode(", ", $array_field);
        $bindValue = implode(", ", $array_bind);

        $prefix = _DB_PREFIX_;
        if ($this->getPrefix()) {
            $prefix = $this->getPrefix();
        }
        if ($prefix) {
            $prefix .= '.';
        }
        $query = "INSERT INTO " . $prefix . $table . " ({$fields}) VALUES ({$bindValue})";

        if ($autoCommit === false) {
            $this->beginTransaction();
        } else {
            parent::setAutoCommit();
        }

        $statement = $this->prepare($query);

        foreach ($array_value as $field => $value) {

            if (is_null($value))
                $statement->bindValue(':' . $field, NULL, \PDO::PARAM_NULL);
            else
                $statement->bindValue(':' . $field, $value);
        }

        $statement->execute();

        if ($this->getNumberError()) {
            $debug = $statement->debugDumpParams();
            $this->rollBack();
            die('In table "' . $table . '": ' . $this->getMsgError() . ' - ' . $debug);
        } else {

            $result = $this->rowAffected($statement);
            $lastID = (int) $this->insertID();

            if ($autoCommit === true) {
                $this->commit();
                $this->closeConnection();
            }
            return $lastID;
        }
    }

    /**
     * Realizar o comando UPDATE no banco de dados
     * @return Object (query pdo) 
     */
    public function update($table, array $datas, $where, $autoCommit = true) {

        $array_field = array();
        $array_value = array();
        foreach ($datas as $field => $value) {
            $array_field[] = $field . ' = :' . $field;
            $array_value[$field] = $value;
        }
        $fields = implode(", ", $array_field);

        $prefix = _DB_PREFIX_;
        if ($this->getPrefix()) {
            $prefix = $this->getPrefix();
        }
        if ($prefix) {
            $prefix .= '.';
        }
        if ($autoCommit === false) {
            $this->beginTransaction();
        } else {
            parent::setAutoCommit();
        }
        $query = "UPDATE " . $prefix . $table . " SET {$fields} WHERE {$where}";

        $statement = $this->prepare($query);

        foreach ($array_value as $field => $value) {
            if (is_null($value)) {
                $statement->bindValue(':' . $field, NULL, \PDO::PARAM_NULL);
            } else {
                $statement->bindValue(':' . $field, $value);
            }
        }

        $result = $statement->execute();

        if ($this->getNumberError()) {
            if (parent::inTransaction()) {
                $this->rollBack();
            }
            $debug = $statement->debugDumpParams();
            die('In table "' . $prefix . $table . '": ' . $this->getMsgError() . ' - ' . $debug);
        }
        if ($autoCommit === true) {
            $this->closeConnection();
        }
        return ((int) $result > 0 ? true : false);
    }

    /**
     * Realizar o comando DELETE no banco de dados
     * @return boolean ou rows: Linhas afetadas
     */
    public function delete($table, $where, $autoCommit = true) {
        if ($where) {

            $prefix = _DB_PREFIX_;
            if ($this->getPrefix()) {
                $prefix = $this->getPrefix();
            }
            if ($prefix) {
                $prefix .= '.';
            }
            $query = "DELETE FROM `{$prefix}{$table}` WHERE " . $where;

            if ($autoCommit === false) {
                $this->beginTransaction();
            } else {
                parent::setAutoCommit($autoCommit);
            }
            $return = $this->execute($query);
            if ($this->getNumberError()) {
                $this->rollBack();
                return false;
            }
            if ($autoCommit === true) {
                $this->closeConnection();
            }
            return true;
        }
        return false;
    }

    /**
     * Realizar o comando DELETE(ALL) no banco de dados
     * @return (rows: Linhas afetadas) 
     */
    public function deleteAll($table, $autoCommit = true) {
        try {
            if ($autoCommit === false) {
                $this->beginTransaction();
            } else {
                parent::setAutoCommit();
                $this->closeConnection();
            }
            $prefix = _DB_PREFIX_;
            if ($this->getPrefix()) {
                $prefix = $this->getPrefix();
            }
            if ($prefix) {
                $prefix .= '.';
            }
            return $this->execute("DELETE FROM `{$prefix}{$table}` ");
        } catch (Exception $ex) {
            throw new \Exception($ex);
        }
    }

    /**
     * 
     * @return array
     */
    public function fetchAll($sql) {
        $prefix = '';
        if ($this->getPrefix()) {
            $prefix = $this->getPrefix();
        }
        if ($prefix) {
            $prefix .= '.';

            $sql = str_replace(_DB_PREFIX_, $prefix, $sql);
        }
        try {
            return parent::fetchAll($sql);
        } catch (Exception $ex) {
            throw new \Exception($ex);
        }
    }

    /**
     * 
     * @return mixed
     */
    public function execute($sql) {
        try {
            return parent::execute($sql);
        } catch (Exception $ex) {
            throw new \Exception($ex);
        }
    }

    public function getEnumValue($table, $column) {

        $prefix = _DB_PREFIX_;
        if ($this->getPrefix()) {
            $prefix = $this->getPrefix();
        }
        if ($prefix) {
            $prefix .= '.';
        }

        $sql = "SHOW COLUMNS FROM `" . $prefix . $table . "` LIKE '" . $column . "'";
        $res = $this->getRow($sql);
        $type = $res['Type'];
        preg_match('/enum\((.*)\)$/', $type, $matches);
        $list = explode(',', $matches[1]);
        if (count($list) > 0) {
            foreach ($list as $k => $value) {
                $list[$k] = str_replace("'", '', $value);
            }
        }
        return $list;
    }

    /**
     * 
     * @return array
     */
    public function getRow($sql = null) {

        $prefix = $this->getPrefix();


        if ($prefix) {
            $prefix .= '.';

            $sql = str_replace(_DB_PREFIX_, $prefix, $sql);
        }


        return parent::getRow($sql);
    }

    public function getValue($sql = null) {

        $prefix = $this->getPrefix();

        if ($prefix) {
            $prefix .= '.';

            $sql = str_replace(_DB_PREFIX_, $prefix, $sql);
        }
        return parent::getValue($sql);
    }

    public function displayError($sql) {

        $prefix = $this->getPrefix();


        if ($prefix) {
            $prefix .= '.';

            $sql = str_replace(_DB_PREFIX_, $prefix, $sql);
        }
        return parent::displayError($sql);
    }

    public function getVersion() {
        return parent::getValue('SELECT VERSION()');
    }

    public function numRows($sql) {
        $prefix = $this->getPrefix();

        if ($prefix) {
            $prefix .= '.';

            $sql = str_replace(_DB_PREFIX_, $prefix, $sql);
        }
        return parent::numRows($sql);
    }

    public function commit() {
        parent::commit();
    }

    public function rollBack() {
        parent::rollBack();
    }

    public function closeConnection() {
        parent::closeConnection();
    }

    public function validateFields($context, $mode = null) {
        $datas = array();

        $object_vars = Tools::getObjectVars($context);

        foreach ($object_vars as $field => $value) {
            $is_valid = true;
            $rule = '';

            if (array_key_exists($field, $context->defFields)) {
                if ($context->defFields[$field][0] == 'required') {
                    if (!is_array($value) && Tools::strlen($value) < 1) {
                        $is_valid = false;
                    } elseif (is_array($value) && count($value) < 1) {
                        $is_valid = false;
                    }
                }


                if ($is_valid) {
                    if (Tools::strlen($value) > 0 or is_array($value)) {
                        if (!empty($context->defFields[$field][1])) {
                            $rules = $context->defFields[$field][1];
                            $continue = true;

                            if (isset($rules[0])) {
                                $rule = $rules[0];
                                if (!is_array($value)) {

                                    if ($rule == 'ID') {
                                        if (!is_null($value) && !(int) $value) {
                                            $is_valid = false;
                                        } else {
                                            $continue = false;
                                        }
                                    } elseif ($rule == 'NUMERIC' or $rule == 'INT') {
                                        if (!is_null($value) && !HelperValidate::isNumeric($value)) {
                                            $is_valid = false;
                                        } else {
                                            $continue = false;
                                        }
                                    } elseif ($rule == 'DECIMAL') {
                                        if (!is_null($value) && !HelperValidate::isDecimal($value)) {
                                            $is_valid = false;
                                        } else {
                                            $continue = false;
                                        }
                                    } elseif ($rule == 'EMAIL') {
                                        if (!is_null($value) && !HelperValidate::isEmail($value)) {
                                            $is_valid = false;
                                        } else {
                                            $continue = false;
                                        }
                                    } elseif ($rule == 'ALPHABETIC') {
                                        if (!is_null($value) && !HelperValidate::isAlphabetic($value)) {
                                            $is_valid = false;
                                        } else {
                                            $continue = false;
                                        }
                                    } elseif ($rule == 'DATETIME') {
                                        if (!is_null($value) && !HelperValidate::isDate($value))
                                            $is_valid = false;
                                        else
                                            $continue = false;
                                    } elseif ($rule == 'DATE') {
                                        if (!is_null($value) && !HelperValidate::isDate($value, 'Y-m-d')) {
                                            $is_valid = false;
                                        } else {
                                            $continue = false;
                                        }
                                    } elseif ($rule == 'TIME') {
                                        if (
                                                !is_null($value) && (!HelperValidate::isDate($value, 'H:i:s') && !HelperValidate::isDate($value, 'H:i'))
                                        ) {
                                            $is_valid = false;
                                        } else {
                                            $continue = false;
                                        }
                                    }
                                } elseif (is_array($value) && $rule == 'LIST') {
                                    if (count($value) < 1) {
                                        $is_valid = false;
                                    } else {
                                        $continue = false;
                                    }
                                }
                            }
                            if ($continue) {
                                $is_valid = (in_array($value, $rules));
                            }
                        }
                    }
                }


                if (!$is_valid) { //Clear all vars
                    foreach ($object_vars as $f => $v) {
                        $this->$f = null;
                    }
                    if ($mode == null) {
                        $mode = 'model';
                    }
                    die('Fatal error [' . $mode . ']: ' . $field . ($rule ? ' (' . $rule . ')' : '') . ' =  ' . (Tools::strlen($value) > 0 ? $value : ' IS EMPTY'));
                    return false;
                }
                $datas[$field] = $value;
            }
        }

        return $datas;
    }

}
