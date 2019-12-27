<?php
namespace App\Patterns\Visitor\Changer;

use App\Patterns\Visitor\Transport\Car;
use App\Patterns\Visitor\Transport\Ship;

class Report implements Changer
{
    public function changeCar(Car $car)
    {
        $car->setColor('Gray');
        echo $car->getColor();
    }

    public function changeShip(Ship $ship)
    {
        $ship->setDisplacement(11550);
        echo $ship->getDisplacement();
    }
}
