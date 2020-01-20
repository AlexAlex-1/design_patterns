<?php
namespace App\Test;

class DbObject
{
    public function start()
    {
        $dsn = "mysql:host=localhost;dbname=myphp";
        $user = "progenexfi";
        $password = "Progenexfit123~";

        $pdo = new \PDO ($dsn, $user, $password, array(\PDO::ATTR_PERSISTENT => true));
        return $pdo;
    }
}
