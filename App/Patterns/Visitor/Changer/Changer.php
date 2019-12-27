<?php
namespace App\Patterns\Visitor\Changer;

use App\Patterns\Visitor\Transport\Car;
use App\Patterns\Visitor\Transport\Ship;

interface Changer
{
    public function changeCar(Car $car);

    public function changeShip(Ship $ship);
}
