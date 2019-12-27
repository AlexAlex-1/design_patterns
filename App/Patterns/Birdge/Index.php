<?php
namespace App\Patterns\Birdge;

use App\Patterns\Birdge\AbstractFunctions\Functions;
use App\Patterns\Birdge\Implementations\Sony;

class Index
{
    public array $phones = [];

    private object $functions;

    private object $sony;

    public function __construct($template)
    {
        include $template;
        $this->sony = new Sony;
        $this->functions = new Functions($this->sony);
    }

    public function start()
    {
        echo $this->functions->volumeUp(15);
    }
}
