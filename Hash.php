<?php

/**
 * Class Hash
 *
 * Framework CASIPE
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2018 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

namespace core;

// (PHP 5 >= 5.5.0)
Class Hash {

    protected function generate($hash) {
        // Hash: default
        return password_hash($hash, PASSWORD_PATH_TEMPLATE_) . "\n";
    }

    protected function generate_bcrypt($hash) {
        // Hash: custo e o salt
        $options = [
            'cost' => 11,
            'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
        ];

        return password_hash($hash, PASSWORD_BCRYPT, $options) . "\n";
    }

    protected function verify($hash_verify, $hash) {
        if (password_verify($hash_verify, $hash))
            return true;
        return false;
    }

}
