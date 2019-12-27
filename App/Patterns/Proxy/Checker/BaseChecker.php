<?php
namespace App\Patterns\Proxy\Checker;

class BaseChecker implements CheckerInterface
{
    public function writeLog()
    {
        $file = fopen('/var/www/http/myphp/log/check.log', 'c+');
        $now = date('Y-m-d H:i');
        fwrite($file, $now . PHP_EOL);
        fclose($file);
    }
}
