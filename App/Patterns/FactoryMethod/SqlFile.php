<?php
namespace App\Patterns\FactoryMethod;

class SqlFile implements AbstractFile
{
    public function createFile($name)
    {
        fopen($name.'.sql', 'w');
        echo 'Sql file has been created';
    }
}
