<?php
namespace App\Patterns\State\Context;

use App\Patterns\State\States\AbstractState;

class Context
{
    private $state;

    public function __construct(
        AbstractState $state
    ) {
        $this->state = $state;
    }

    public function change(AbstractState $state)
    {
        $this->state = $state;
        $this->state->setContext($this);
    }

    public function applyTheme()
    {
        $this->state->applyTheme();
    }
}
