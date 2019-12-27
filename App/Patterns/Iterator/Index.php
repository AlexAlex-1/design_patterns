<?php
namespace App\Patterns\Iterator;

use App\Patterns\Iterator\Collection\Cities;
use App\Patterns\Iterator\Iterators\Iterator;

class Index
{
    public function __construct($template)
    {
        include $template;
    }

    public function start()
    {
        $collection = new Cities();
        $collection->addCity('Michigan');
        $collection->addCity('Washington');
        $collection->addCity('New York');
        $collection = $collection->getCollection('DESC');
        foreach ($collection as $key => $city) {
            echo nl2br("$city\n");
        }
    }
}
