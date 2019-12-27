<?php
namespace App\Patterns\FactoryMethod;

abstract class AbstractTask
{
    public function start() {
        abstract public function createFile();
    }
}
