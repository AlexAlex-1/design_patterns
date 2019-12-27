<?php
namespace App\Patterns\Memento\Creator;

use App\Patterns\Memento\Keeper\Save;

class Man
{
    protected $money = 0;

    public function toSpend($money)
    {
        $this->money -= $money;
    }

    public function toGet($money)
    {
        $this->money += $money;
    }

    public function checkMoney()
    {
        return $this->money;
    }

    public function writeDown(Save $saver)
    {
        $this->money = $saver->getState();
    }

    public function getRecord()
    {
        return new Save($this->money);
    }
}
