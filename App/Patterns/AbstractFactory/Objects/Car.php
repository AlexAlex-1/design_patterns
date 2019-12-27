<?php
namespace App\Patterns\AbstractFactory\Objects;

interface Car
{
    public function createCar($name);

    public function setLogo($logo);

    public function setMaxSpeed($speed);

    public function setPrice($price);

    public function getLogo();

    public function getMaxSpeed();

    public function getPrice();
}
