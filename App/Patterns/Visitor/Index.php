<?php
namespace App\Patterns\Visitor;

use App\Patterns\Visitor\Changer\Report;
use App\Patterns\Visitor\Transport\Car;
use App\Patterns\Visitor\Transport\Ship;

class Index
{
    public function __construct($template)
    {
        include $template;
    }

    public function start()
    {
        $changer = new Report;
        $car = new Car;
        $ship = new Ship;

        $car->change($changer);
        $ship->change($changer);
    }
}
