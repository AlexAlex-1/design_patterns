<?php
namespace App\Patterns\Facade;

use App\Patterns\Facade\Snappy\Connect;

class Index
{
    private $snappy;

    public function __construct($template)
    {
        include $template;
        $this->snappy = new Connect;
    }

    public function start()
    {
        $pdf = $this->snappy->createPdf();
        echo $this->snappy->getPdf($pdf);
    }
}
