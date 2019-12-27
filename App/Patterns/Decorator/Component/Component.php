<?php
namespace App\Patterns\Decorator\Component;

class Component implements ComponentInterface
{
    public function method($path)
    {
        return $path;
    }
}
