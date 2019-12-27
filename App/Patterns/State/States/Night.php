<?php
namespace App\Patterns\State\States;

class Night extends AbstractState
{
    private $image;

    public function __construct()
    {
        $this->image = 'http://' . $_SERVER['HTTP_HOST'] . '/App/Patterns/State/view/images/night.jpg';
    }

    public function applyTheme()
    {
        $html = "<center><h1>Good Night</h1></center><img src='$this->image' style='width: 100%; height: 100%;'></img>";
        echo $html;
    }
}
