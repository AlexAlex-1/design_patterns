<?php
namespace App\Patterns\AbstractFactory;

use App\Patterns\AbstractFactory\EarthShip;
use App\Patterns\AbstractFactory\EarthCar;
use App\Patterns\AbstractFactory\Objects\Ship as Ship;
use App\Patterns\AbstractFactory\Objects\Car as Car;

class EarthFactory implements AbstractFactory
{
    public function createShip(): Ship
    {
        return new EarthShip;
    }

    public function createCar(): Car
    {
        return new EarthCar;
    }
}
