<?php
namespace App\Patterns\Adapter;

use App\Patterns\Adapter\Adapter\Adapter;

class Index extends Adapter
{
    public function __construct($template)
    {
        include $template;
        $this->localStorage = new Adapter;
    }

    public function start()
    {
        $this->localStorage->clearStorage();
        //$this->createCar(new MoonFactory);
    }
}
