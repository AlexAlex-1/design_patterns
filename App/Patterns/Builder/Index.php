<?php
namespace App\Patterns\Builder;

use App\Patterns\Builder\LocalBuilder\BigHouseBuilder;

class Index
{
    private $builder;

    public function __construct($template)
    {
        include $template;
    }

    public function start()
    {
    //You can change any builder    
        $builder = $this->builder = new BigHouseBuilder;
        $this->createHouse($builder);
    }

    public function createHouse($builder)
    {
    //You can use condition for house configuration
        $builder->addWindows(25);
        $builder->addPool();
        $builder->getHouse()->showHouse();
    }

}
