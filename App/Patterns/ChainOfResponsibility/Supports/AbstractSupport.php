<?php
namespace App\Patterns\ChainOfResponsibility\Supports;

abstract class AbstractSupport
{
    private $nextSupport;

    public function setNext($support)
    {
        $this->nextSupport = $support;
        return $support;
    }

    public function clientSupport($user)
    {
        if ($this->nextSupport) {
            return $this->nextSupport->clientSupport($user);
        }
        return null;
    }
}
