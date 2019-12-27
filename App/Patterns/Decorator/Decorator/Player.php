<?php
namespace App\Patterns\Decorator\Decorator;

class Player extends BaseDecorator
{
    public function method($path)
    {
        $html = "<audio controls><source src='$path' type='audio/mpeg'></audio>";
        return $html;
    }
}
