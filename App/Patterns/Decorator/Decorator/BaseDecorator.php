<?php
namespace App\Patterns\Decorator\Decorator;

class BaseDecorator implements \App\Patterns\Decorator\Component\ComponentInterface
{
    protected $component;

    public function __construct(\App\Patterns\Decorator\Component\ComponentInterface $component)
    {
        $this->component = $component;
    }

    public function method($path)
    {
        return $this->component->method($path);
    }
}
