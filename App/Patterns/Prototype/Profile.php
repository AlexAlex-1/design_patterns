<?php
namespace App\Patterns\Prototype;

class Profile
{
    public $name;

    public $id;

    public $messages;

    public $isOnline;

    public function __construct()
    {
        $this->start();
    }

    public function __clone()
    {
    }

    public function start()
    {
        $this->name = 'Alex';
        $this->id = 134871125;
        $this->messages = 'Aucun';
        $this->isOnline = true;
    }
}
