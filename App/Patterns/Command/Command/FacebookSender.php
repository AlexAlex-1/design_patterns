<?php
namespace App\Patterns\Command\Command;

class FacebookSender implements AbstractSender
{
    private $message;

    private $apiKey;

    private $recipient;

    public function __construct(
        $message, $api, $recipient
    ) {
        $this->message = $message;
        $this->api = $apiKey;
        $this->recipient = $recipient;
    }

    public function sendMessage()
    {
        $log = '';
        if (strlen($this->api) != 11) {
            $log = 'Error, api incorrect';
        }
        $recipient->execute($this->message, $log);
    }
}
