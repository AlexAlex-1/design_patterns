<?php
namespace App\Patterns\AbstractFactory;

use App\Patterns\AbstractFactory\Objects\Ship as Ship;
use App\Patterns\AbstractFactory\Objects\Car as Car;

interface AbstractFactory
{
    public function createShip(): Ship;

    public function createCar(): Car;
}
