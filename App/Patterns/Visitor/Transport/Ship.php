<?php
namespace App\Patterns\Visitor\Transport;

use App\Patterns\Visitor\Changer\Changer;

class Ship implements Transport
{
    public $displacement;

    public function change(Changer $changer)
    {
        $changer->changeShip($this);
    }

    public function setDisplacement($displacement)
    {
        $this->displacement = $displacement;
    }

    public function getDisplacement()
    {
        return $this->displacement;
    }
}
