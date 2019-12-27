<?php
namespace App\Patterns\TemplateMethod\Payment;

abstract class AbstractPayment
{
    protected $cartNumber;

    protected $total;

    public function __construct(int $cartNumber, $total)
    {
        $this->cartNumber = $cartNumber;
        $this->total = $total;
    }

    public function pay()
    {
        $this->connect($this->cartNumber);
        $this->report($this->total);
    }

    abstract public function connect(int $cartNumber);

    abstract public function report(int $total);
}
