<?php
namespace App\Patterns\Command\Sender;

class User
{
    private $sender;

    public function setSender($sender)
    {
        $this->sender = $sender;
    }

    public function send()
    {
        $this->sender->sendMessage();
    }
}
