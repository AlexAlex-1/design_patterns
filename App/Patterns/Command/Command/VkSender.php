<?php
namespace App\Patterns\Command\Command;

class VkSender implements AbstractSender
{
    private $message;

    private $recipient;

    private $password;

    private $login;

    public function __construct(
        $message, $login, $password, $recipient
    ) {
        $this->message = $message;
        $this->password = $password;
        $this->login = $login;
        $this->recipient = $recipient;
    }

    public function sendMessage()
    {
        $log = '';
        if (strlen($this->password) < 8) {
            $log = 'Error, password incorrect';
        }
        if (strlen($this->message > 100)) {
            $log = 'message invalid';
        }
        $this->recipient->execute($this->message, $log);
    }
}
