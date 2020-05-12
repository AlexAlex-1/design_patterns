<?php
namespace App\Patterns\AbstractFactory;

class Index
{

    public $car;

/*    public function __construct($template)
    {
        include $template;
    }*/

    public function start()
    {
        //$this->createCar(new MoonFactory);
    }

    public function createCar($factory)
    {
        $name = 'TopCar';
        $car = $factory->createCar();
        $this->car = $car;
        $this->car->setPrice(6548);
        $car->createCar($name);
    }
}
