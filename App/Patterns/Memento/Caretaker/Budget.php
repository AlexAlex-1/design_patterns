<?php
namespace App\Patterns\Memento\Caretaker;

use App\Patterns\Memento\Creator\Man;

class Budget
{
    protected $state;

    public function saveBudget(Man $man)
    {
        $this->state = $man->getRecord();
    }

    public function getBudget(Man $man)
    {
        $man->writeDown($this->state);
    }
}
