<?php
namespace App\Patterns\Composite\Cart;

abstract class AbstractCart
{
    public function add(AbstractCart $cart) {}

    abstract function operation();
}
