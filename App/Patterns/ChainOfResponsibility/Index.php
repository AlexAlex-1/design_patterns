<?php
namespace App\Patterns\ChainOfResponsibility;

use App\Patterns\ChainOfResponsibility\Supports\Email;
use App\Patterns\ChainOfResponsibility\Supports\Call;
use App\Patterns\ChainOfResponsibility\User\User;
use App\Patterns\ChainOfResponsibility\Supports\AbstractSupport;

class Index
{
    public function __construct($template)
    {
        include $template;
    }

    public function start()
    {
        $user = new User;
        $callSupport = new Call($user);
        $emailSupport = new Email($user);

        $callSupport->setNext($emailSupport);
        $callSupport->clientSupport($user);
    }
}
