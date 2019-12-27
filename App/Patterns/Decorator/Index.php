<?php
namespace App\Patterns\Decorator;

use App\Patterns\Decorator\Component\Component;
use App\Patterns\Decorator\Decorator\Player;
use App\Patterns\Decorator\Decorator\Text;

class Index
{
    private $component;

    public function __construct($template)
    {
        include $template;
        $this->component = new Component;
    }

    public function start()
    {
        $player = new Player($this->component);
        $text = new Text($this->component);

        //$path = 'https://' . $_SERVER['SERVER_NAME']. '/Corazon.mp3';
        $path = '~/row1.txt';
        $extension = pathinfo($path);
        switch($extension['extension']) {
            case "mp3" :
                $this->callToDecorator($player, $path);
                break;
            case "txt" :
                $this->callToDecorator($text, $path);
                break;
        }
    }

    public function callToDecorator($component, $path)
    {
        echo $component->method($path);
    }
}
