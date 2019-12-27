<?php
namespace App\Patterns\Memento\Keeper;

class Save
{
    protected $money;

    public function __construct($money)
    {
        $this->money = $money;
    }

    public function getState()
    {
        return $this->money;
    }
}
