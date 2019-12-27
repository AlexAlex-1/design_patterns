<?php
namespace App\Patterns\Memento;

use App\Patterns\Memento\Caretaker\Budget;
use App\Patterns\Memento\Creator\Man;
use App\Patterns\Memento\Keeper\Save;

class Index
{
    public function __construct($template)
    {
        include $template;
    }

    public function start()
    {
        $man = new Man;
        $budget = new Budget;
        $man->toGet(100000);
        $record = $man->getRecord();
        $budget->saveBudget($man);
        $man->toSpend(5000);
        $budget->getBudget($man);
        echo $man->checkMoney();
    }
}
