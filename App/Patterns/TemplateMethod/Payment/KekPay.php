<?php
namespace App\Patterns\TemplateMethod\Payment;

class KekPay extends AbstractPayment
{
    public function connect(int $cartNumber)
    {
        echo nl2br("Connected, credit card: $cartNumber is valid\n");
    }

    public function report($total)
    {
        $grandTotal = $total + (($total / 100) * 3.9);
        echo nl2br("Payd with commission 3.9%\nTotal: $total\nGrandTotal: $grandTotal");
    }
}
