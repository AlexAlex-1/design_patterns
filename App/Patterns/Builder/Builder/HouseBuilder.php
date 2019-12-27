<?php
namespace App\Patterns\Builder\Builder;

interface HouseBuilder
{
    public function addFireplace();

    public function addPool();

    public function addFloor();

    public function addWindows($window);

    public function getHouse();
}
