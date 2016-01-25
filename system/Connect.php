<?php


namespace system;




class Connect
{

    private function __construct()
    {
//        $dsn = "mysql:host=localhost;dbname=u278763549_beej;charset=utf8";
        $dsn = "mysql:host=mysql.hostinger.com.ua;dbname=u278763549_beej;charset=utf8";
        $this->pdo = new \PDO($dsn, "u278763549_quake", "nfkbyfhr");
    }
//Singleton
    public static function getInstance()
    {
        static $instance;
        if ($instance === null) {
            $instance = new self();
        }
        return $instance;
    }
}