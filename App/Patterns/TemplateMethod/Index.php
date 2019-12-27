<?php
namespace App\Patterns\TemplateMethod;

use App\Patterns\TemplateMethod\Payment\KekPay;

class Index
{
    public function __construct($template)
    {
        include $template;
    }

    public function start()
    {
        $kekPay = new KekPay(4465214645414547, 2000);
        $kekPay->pay();
    }
}
