<?php
namespace App\Patterns\Birdge\AbstractFunctions;

class Functions
{
    public function __construct(
        Phone $phone
    ) {
        $this->phone = $phone;
    }

    public function volumeUp($percent)
    {
        $this->phone->setVolume($this->phone->getVolume() + $percent);
        return $this->phone->getVolume();
    }

    public function volumeDown($percent)
    {
        $this->phone->setVolume($this->phone->getVolume() - $percent);
        return $this->phone->getVolume();
    }

    public function getVolume()
    {
        return $this->phone->getVolume();
    }

    public function getBrand()
    {
        return $this->phone->getBrand();
    }

    public function setBrand($brand)
    {
        $this->phone->setBrand($brand);
        return $this->phone->getBrand();
    }
}
