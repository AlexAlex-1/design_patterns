<?php
namespace App\Patterns\Iterator\Collection;

use App\Patterns\Iterator\Iterators\Iterator;

class Cities
{
    private $cities = [];

    public function getCities()
    {
        return $this->cities;
    }

    public function addCity($city)
    {
        $this->cities[] = $city;
    }

    public function getCollection($sortFlag)
    {
        if (!$this->cities) {
            echo 'No cities. You can add some cities via function addCity with string param';
        }
        sort($this->cities);
        switch ($sortFlag) {
            case 'ASC' :
                return new Iterator($this);
            case 'DESC' :
                return new Iterator($this, true);
        }
    }
}
