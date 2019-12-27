<?php
namespace App\Patterns\Strategy\Strategy;

class ForStrategy implements BaseStrategy
{
    public function getNumber()
    {
        for ($i = 0; $i <= 100; $i++)
        {
            echo nl2br("$i\n");
        }
    }
}
