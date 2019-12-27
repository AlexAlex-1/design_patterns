<?php
namespace App\Patterns\Composite;

use App\Patterns\Composite\Cart\Cart;
use App\Patterns\Composite\Cart\Product;

class Index
{
    private $cart;

    public function __construct($template)
    {
        include $template;
        $this->cart = new Cart;
    }

    public function start()
    {
        $this->cart->add(new Product('iPhone XR', 80000));
        $this->cart->add(new Product('iPhone X', 60000));
        $this->cart->add(new Product('iPhone 7', 35000));
        $this->cartRender($this->cart);
    }

    private function cartRender(Cart $cart)
    {
        $results = $cart->operation();
        foreach($results as $result) {
            echo nl2br('name: ' . $result['name'] . ' price: ' . $result['price'] . "\n");
        }
    }
}
