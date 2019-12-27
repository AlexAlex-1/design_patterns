<?php
namespace App\Patterns\State\States;

class Day extends AbstractState
{
    private $image;

    public function __construct()
    {
        $this->image = 'http://' . $_SERVER['HTTP_HOST'] . '/App/Patterns/State/view/images/day.jpg';
    }

    public function applyTheme()
    {
        $html = "<center><h1>Good Day</h1></center><img src='$this->image' style='width: 100%; height: 100%;'></img>";
        echo $html;
    }
}
