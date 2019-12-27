<?php
namespace App\Patterns\Command\Recipient;

class Screen
{
    public function execute($message, $log)
    {
        if ($log) {
            echo $log;
        } else {
            echo "$message\nSended";
        }
    }
}
