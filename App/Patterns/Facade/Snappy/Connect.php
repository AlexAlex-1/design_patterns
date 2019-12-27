<?php
namespace App\Patterns\Facade\Snappy;

use Knp\Snappy\Pdf;

class Connect
{
    public function createPdf()
    {
        return new Pdf('~/');
    }

    public function getPdf(Pdf $snappy)
    {
        header('Content-Type: application/pdf');
        $snappy->generateFromHtml('<h1>Bill</h1><p>You owe me money, dude.</p>', '/tmp/bill-123.pdf');
        return $snappy;
    }
}
