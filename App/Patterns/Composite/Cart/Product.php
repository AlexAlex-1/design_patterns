<?php
namespace App\Patterns\Composite\Cart;

class Product extends AbstractCart
{
    public string $name;

    public $price;

    public function __construct(
        $name, $price
    ) {
        $this->name = $name;
        $this->price = $price;
    }

    public function operation()
    {
        return ['name' => $this->name, 'price' => $this->price];
    }
}
