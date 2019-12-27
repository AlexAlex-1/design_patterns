<?php
namespace App\Patterns\FactoryMethod;

class Index extends AbstractTask
{
    public function __construct($template)
    {
        include $template;
    }

    public function start()
    {
        return $this->createFile()->createFile('test');
    }

    public function createFile()
    {
        return new TextFile;
    }
}
