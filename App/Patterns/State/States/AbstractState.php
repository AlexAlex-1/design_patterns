<?php
namespace App\Patterns\State\States;

use App\Patterns\State\Context\Context;

abstract class AbstractState
{
    protected $context;

    public function setContext(Context $context)
    {
        $this->context = $context;
    }

    abstract public function applyTheme();
}
