<?php
namespace App\Patterns\Birdge\Implementations;

use App\Patterns\Birdge\AbstractFunctions\Phone;

class Sony implements Phone
{
    public $default_volume = 45;

    public string $brand = __CLASS__;

    public function setVolume($percent)
    {
        $this->default_volume = $percent;
    }

    public function getVolume()
    {
        return $this->default_volume;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
}
