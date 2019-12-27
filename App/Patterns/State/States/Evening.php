<?php
namespace App\Patterns\State\States;

class Evening extends AbstractState
{
    private $image;

    public function __construct()
    {
        $this->image = 'http://' . $_SERVER['HTTP_HOST'] . '/App/Patterns/State/view/images/evening.jpg';
    }

    public function applyTheme()
    {
        $html = "<center><h1>Good Evening</h1></center><img src='$this->image' style='width: 100%; height: 100%;'></img>";
        echo $html;
    }
}
