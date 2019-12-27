<?php
namespace App\Patterns\Strategy\Strategy;

class WhileStrategy implements BaseStrategy
{
    public function getNumber()
    {
        $i = 0;
        while($i <= 100) {
            $i++;
            echo nl2br("$i\n");
        }
    }
}
