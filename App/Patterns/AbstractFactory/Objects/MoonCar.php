<?php
namespace App\Patterns\AbstractFactory\Objects;

class MoonCar implements Car
{
    private $logo;

    private $speed;

    private $price;

    public function createCar($name)
    {
        $fileName = $name.'.txt';
        $file = file_get_contents($name.'.txt');
        $file .= 'Name: '.$name.' Logo: '.$this->getLogo().' MaxSpeed: '.$this->getMaxSpeed().' getPrice: '.$this->getPrice().PHP_EOL;
        file_put_contents($fileName, $file);
        echo 'Moon Car has been created';
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
