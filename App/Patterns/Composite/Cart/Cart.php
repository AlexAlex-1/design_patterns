<?php
namespace App\Patterns\Composite\Cart;

class Cart extends AbstractCart
{
    protected $products;

    public function __construct()
    {
        $this->children = new \SplObjectStorage;
    }

    public function add(AbstractCart $cart)
    {
        $this->children->attach($cart);
    }

    public function operation()
    {
        $result = [];
        $i = 0;
        foreach ($this->children as $child) {
            $childResult = $child->operation();
            $i++;
            $result[$i]['name'] = $childResult['name'];
            $result[$i]['price'] = $childResult['price'];
        }

        return $result;
    }
}
