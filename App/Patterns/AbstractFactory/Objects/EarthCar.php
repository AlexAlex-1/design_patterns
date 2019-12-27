<?php
namespace App\Patterns\AbstractFactory\Objects;

class EarthCar implements Car
{
    private $logo;

    private $speed;

    private $price;

    public function createCar()
    {
        fopen($name.'.txt', 'w');
        $file = file_get_contents($name.'.txt');
        $file .= 'Logo: '.$this->getLogo().' MaxSpeed: '.$this->getMaxSpeed().' getPrice: '.$this->getPrice().\r\n;
        echo 'Earth Car has been created';
    }

    public function setLogo($logo)
    {
        return $this->logo = $logo;
    }

    public function setMaxSpeed($speed)
    {
        return $this->speed = $speed;
    }

    public function setPrice($price)
    {
        return $this->price = $price;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function getMaxSpeed()
    {
        return $this->speed;
    }

    public function getPrice()
    {
        return $this->price;
    }

}
