<?php
namespace App\Patterns\ChainOfResponsibility\Supports;

use App\Patterns\ChainOfResponsibility\User\User;

class Call extends AbstractSupport
{
    public function clientSupport($user)
    {
        if($user->getFromCart() > 10) {
            echo 'Мы перезвоним Вам в самое короткое время!';
        } else {
            return parent::clientSupport($user);
        }
    }
}

