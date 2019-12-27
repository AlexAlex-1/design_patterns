<?php
namespace App\Patterns\FactoryMethod;

class TextFile implements AbstractFile
{
    public function createFile($name)
    {
        echo exec('cd . && touch '.$name.'.text');
        echo 'Text file has been created';
    }
}
