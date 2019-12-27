<?php
namespace App\Patterns\Proxy;

use App\Patterns\Proxy\Checker\BaseChecker;
use App\Patterns\Proxy\Checker\ProxyChecker;

class Index
{
    private $baseChecker;

    private $proxyChecker;

    public function __construct($template)
    {
        include $template;
        $this->baseChecker = new BaseChecker;
        $this->proxyChecker = new ProxyChecker($this->baseChecker);
    }

    public function start()
    {
        echo date('Y-m-d H:i');
        $this->proxyChecker->writeLog();
    }
}
