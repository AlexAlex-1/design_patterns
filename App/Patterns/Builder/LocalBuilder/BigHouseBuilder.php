<?php
namespace App\Patterns\Builder\LocalBuilder;

use App\Patterns\Builder\Builder\HouseBuilder;
use App\Patterns\Builder\Objects\House;

class BigHouseBuilder implements HouseBuilder
{
    private $house;

    const CURRENT_FUNCTION = '';

    public function __construct()
    {
        $this->house = new House;
        $this->getHouse();
    }

    public function addFireplace()
    {
        return $this->house->parts[] = 'Fireplace: true ';
    }

    public function addPool()
    {
        return $this->house->parts[] = 'Pool: true ';
    }

    public function addFloor()
    {
        return $this->house->parts[] = 'Floor: true ';
    }

    public function addWindows($window)
    {
        return $this->house->parts[] = "Windows: $window ";
    }

    public function getHouse()
    {
        return $this->house;
    }
}
