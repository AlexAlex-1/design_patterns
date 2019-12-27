<?php
namespace App\Patterns\Strategy;

use App\Patterns\Strategy\Strategy\ForStrategy;
use App\Patterns\Strategy\Strategy\DoStrategy;

class Index
{
    public function __construct($template)
    {
        include $template;
    }

    public function start()
    {
        $forStrategy = new ForStrategy;
        $doStrategy = new DoStrategy;
        $forStrategy->getNumber();
        $doStrategy->getNumber();
    }
}
