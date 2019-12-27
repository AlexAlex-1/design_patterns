<?php
namespace App\Patterns\ChainOfResponsibility\Supports;

use App\Patterns\ChainOfResponsibility\User\User;

class Email extends AbstractSupport
{
    public function clientSupport($user)
    {
        if($user->getFromCart() <= 10) {
            echo 'Мы направим ваш запрос на обработку через службы E-mail';
        } else {
            return parent::clientSupport($user);
        }
    }
}
