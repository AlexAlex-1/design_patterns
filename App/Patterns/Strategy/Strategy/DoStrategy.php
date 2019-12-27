<?php
namespace App\Patterns\Strategy\Strategy;

class DoStrategy implements BaseStrategy
{
    public function getNumber()
    {
        $i = 1;
        do {
            echo nl2br("$i\n");
            $i++;
        } while ($i <= 100);
    }
}
