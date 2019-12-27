<?php
namespace App\Patterns\Visitor\Transport;

use App\Patterns\Visitor\Changer\Changer;

class Car implements Transport
{
    private $color;

    public function change(Changer $changer)
    {
        $changer->changeCar($this);
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}
