<?php
namespace DB;

class Connect
{
    private static $connect;

    private function __construct() { }

    public static function getDB()
    {
        $class = static::class;
        if (!isset(static::$connect[$class])) {
            static::$connect[$class] = new static;
        }

        return static::$connect[$class];
    }

    public function connect()
    {
        $dsn = "mysql:host=localhost;dbname=myphp";
        $user = "progenexfi";
        $password = "Progenexfit123~";

        $pdo = new \PDO ($dsn, $user, $password);
        return $pdo;
    }
} 
