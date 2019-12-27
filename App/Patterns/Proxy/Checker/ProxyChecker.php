<?php
namespace App\Patterns\Proxy\Checker;

class ProxyChecker implements CheckerInterface
{
    private $baseChecker;

    public function __construct(BaseChecker $baseChecker)
    {
        $this->baseChecker = $baseChecker;
    }

    public function writeLog()
    {
        if(file_exists('/var/www/http/myphp/log/check.log')) {
            $file = file('/var/www/http/myphp/log/check.log');
            $lastTime = '';
            $qtyStrings = sizeof($file) - 1;
            $now = date('Y-m-d H:i');
            foreach ($file as $line_num => $line) {
                if ($line_num == $qtyStrings) {
                    $lastTime = $line;
                }
            }
            if ($lastTime < $now) {
                $this->baseChecker->writeLog();
            }
        } else {
            $this->baseChecker->writeLog();
        }
    }
}
