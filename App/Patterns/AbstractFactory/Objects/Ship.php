<?php
namespace App\Patterns\AbstractFactory\Objects;

interface Ship
{
    public function createShip();

    public function setShipName($name);

    public function setCountry($country);

    public function setHomePort($port);

    public function setPrice($price);
}
