<?php

/**
 * Class ICommandDb
 *
 * Framework CASIPE
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2018 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

namespace core\interfaces;

interface ICommandDb {

    public function update($table, Array $datas, $where);

    public function delete($table, $where);

    public function execute($sql = null);

    public function fetchAll($sql);

    public function getValue($sql);

    public function reset();

    public function numRows($result);

    public function InsertID();

    public function getMsgError($query = false);

    public function getNumberError();

    public function getVersion();

    public function setDb($db_name);

    public static function hasTableWithSamePrefix($server, $user, $pwd, $db, $prefix);

    public static function checkCreatePrivilege($server, $user, $pwd, $db, $prefix, $engine = null);

    public static function tryToConnect($server, $user, $pwd, $db, $newDbLink = true, $engine = null, $timeout = 5);

    public function getBestEngine();

    public static function tryUTF8($server, $user, $pwd);
}
