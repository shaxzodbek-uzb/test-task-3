<?php

namespace App\Yoyo;


class Auth
{
    public $config;
    public $response;
    public function __construct($config)
    {
        $this->config = $config;
    }

    public function Authorize()
    {
        $headers = $_SERVER;
        $auth = '';
        foreach($headers as $key=>$val){
            if (strpos($key, 'AUTHORIZATION') !== false) {
                $auth = $val;
            }
        }
        
        if ($auth != '') {
            preg_match('/Bearer\s(\S+)/', $auth, $matches);
            if ($matches[1] === $this->config['token']){
                return true;
            }
        }
        return false;
    }
}