<?php
namespace App\Patterns\Command;

use App\Patterns\Command\Sender\User;
use App\Patterns\Command\Command\FacebookSender;
use App\Patterns\Command\Command\VkSender;
use App\Patterns\Command\Recipient\Screen;

class Index
{
    public function __construct($template)
    {
        include $template;
    }

    public function start()
    {
        $user = new User;
        $user->setSender(new VkSender('Hello World', 'dfafadsf', 'fddsaflkjdlksjaadfjls', new Screen));
        $user->send();
    }
}
