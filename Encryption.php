<?php
    
    /**
     * Class Encryption
     *
     * Framework CASIPE
     *
     * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
     * @link http://www.casipe.com.br/
     * @copyright 2013 - 2018 CASIPE - Desenvolvedor Web
     * @license http://www.casipe.com.br/
     */
    
    namespace core;
    
    Class Encryption {
        
        private $_key;
        private $_iv = null;
        public $method = 'AES-256-CBC'; //aes-256-gcm, aes-256-ccm
        public $tag = null;
        
        public function __construct($key, $iv = null) {
            $this->_key = hash('sha256', $key);
            if (!is_null($iv))
                $this->_iv = substr(hash('sha256', $iv), 0, 16);
        }
        
        protected function getInitializationVector() {
            if (is_null($this->_iv)) {
                $ivlen = openssl_cipher_iv_length($this->method);
                $this->_iv = openssl_random_pseudo_bytes($ivlen);
            }
            return $this->_iv;
        }
        
        /**
         * Base64 is not required, but it is be more compact than urlencode
         *
         * @param string $plaintext
         * @return bool|string
         */
        public function encrypt($plaintext) {
            
            if (!in_array(strtolower($this->method), openssl_get_cipher_methods()) &&
                !in_array(strtoupper($this->method), openssl_get_cipher_methods()))
                return '';
            
            try {
                $iv = $this->getInitializationVector();
                
                if ($this->method == 'aes-256-gcm' OR $this->method == 'aes-256-ccm') {
                    $ciphertext = openssl_encrypt($plaintext, $this->method, $this->_key, OPENSSL_RAW_DATA, $iv, $this->tag);
                    return array('ciphertext' => base64_encode($ciphertext), 'tag' => $this->tag);
                } else
                    $ciphertext = base64_encode(openssl_encrypt($plaintext, $this->method, $this->_key, OPENSSL_RAW_DATA, $iv));
            } catch (Exception $e) {
                throw new Exception("Encryption failed");
            }
            return $ciphertext;
        }
        
        public function decrypt($ciphertext, $tag = null) {
            if (!in_array(strtolower($this->method), openssl_get_cipher_methods()) &&
                !in_array(strtoupper($this->method), openssl_get_cipher_methods()))
                return '';
            
            $decrypt = '';
            try {
                $iv = $this->getInitializationVector();
                $ciphertext = base64_decode($ciphertext);
                if ($this->method == 'aes-256-gcm' OR $this->method == 'aes-256-ccm') {
                    if ($tag <> '')
                        $decrypt = openssl_decrypt($ciphertext, $this->method, $this->_key, OPENSSL_RAW_DATA, $iv, $tag);
                } else
                    $decrypt = openssl_decrypt($ciphertext, $this->method, $this->_key, OPENSSL_RAW_DATA, $iv);
            } catch (Exception $e) {
                throw new Exception("Decryption failed");
            }
            return $decrypt;
        }
        
    }

