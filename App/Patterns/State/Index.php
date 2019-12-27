<?php
namespace App\Patterns\State;

use App\Patterns\State\States\Day;
use App\Patterns\State\States\Morning;
use App\Patterns\State\States\Evening;
use App\Patterns\State\States\Night;
use App\Patterns\State\Context\Context;

class Index
{
    public function __construct($template)
    {
        include $template;
    }

    public function start()
    {
        $currentHour = date('G');
        if ($currentHour > 3 && $currentHour < 12) {
            $context = new Context(new Morning);
        } elseif ($currentHour > 11 && $currentHour < 16) {
            $context = new Context(new Day);
        } elseif ($currentHour > 15 && $currentHour < 23) {
            $context = new Context(new Evening);
        } elseif ($currentHour > 22 || $currentHour < 4) {
            $context = new Context(new Night);
        }
        // if you need change times of day, you can do it
        // via this method
        //$context->change(new Night);
        $context->applyTheme();
    }
}
