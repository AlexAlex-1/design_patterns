<?php
namespace App\Patterns\Birdge\AbstractFunctions;

interface Phone
{
    public function setVolume($percent);

    public function getVolume();

    public function getBrand();

    public function setBrand($brand);
}
