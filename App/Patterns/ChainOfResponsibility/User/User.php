<?php
namespace App\Patterns\ChainOfResponsibility\User;

class User
{
    public $qty;

    public function __construct()
    {
        $this->setToCart();
    }

    public function setToCart()
    {
        $qty = rand(8, 12);
        $this->qty = $qty;
    }

    public function getFromCart()
    {
        return $this->qty;
    }
}
