<?php
namespace App\Patterns\AbstractFactory;

use App\Patterns\AbstractFactory\Objects\MoonShip;
use App\Patterns\AbstractFactory\Objects\MoonCar;
use App\Patterns\AbstractFactory\Objects\Ship as Ship;
use App\Patterns\AbstractFactory\Objects\Car as Car;

class MoonFactory implements AbstractFactory
{
    public function createShip(): Ship
    {
        return new MoonShip;
    }

    public function createCar(): Car
    {
        return new MoonCar;
    }
}

