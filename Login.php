<?php

/**
 * Class Login
 *
 * Framework CASIPE
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2018 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

namespace core;

if (session_status() != PHP_SESSION_ACTIVE) {
    //session_cache_limiter('private');
    session_cache_expire(30); //manter a sessao por 30 minutos
    @session_start();
}

class Login {

    public static function isLogged() {
        $cookie = Context::getContext()->cookie;
        if (!isset($cookie->is_logged) OR ! (int) $cookie->is_logged) {
            return false;
        }
        return true;
    }

    public static function checkLogged($url = '') {
        if (self::isLogged()) {
            return true;
        } else {
            if (!$url) {
                self::logout(Context::getContext());
                return false;
            } else {
                return self::logout(Context::getContext(), true, $url);
            }
        }
        return true;
    }

    public static function setAutenticate($logout = false) {
        $cookie = Context::getContext()->cookie;

        if ((int) $cookie->is_logged) {
            $cookie->token_login = null;
            $cookie->save();
            return true;
        } else if ($logout === true) {
            self::logout(Context::getContext());
        }
        return false;
    }

    public static function logout($context = null, $is_redirect = false, $url_redirect = null) {

        if (!is_null($context)) {
            $cookie = $context->cookie;
        } else {
            $cookie = Context::getContext()->cookie;
        }
        $cookie->is_logged = 0;
        $cookie->save();
        if ($is_redirect === true) {
            if (is_null($url_redirect)) {
                $url_redirect = Tools::Url(_URL_SSL_);
            }
            Tools::redirect($url_redirect);
        }
    }

}
