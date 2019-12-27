<?php
namespace App\Patterns\Builder\Objects;

class House
{
    public $parts;

    public function showHouse()
    {
        $houseNumber = rand(1, 255);
        fopen($houseNumber.'.txt', 'w');
        $file = file_get_contents($houseNumber.'.txt');
        $file .= 'House number: '.$houseNumber.' ';
        if (is_array($this->parts)) {
            foreach($this->parts as $part) {
                $file .= $part;
            }
        }
        file_put_contents("$houseNumber.txt", $file);
        echo 'House has been created';
    }
}
