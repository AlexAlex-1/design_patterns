<?php
namespace App\Patterns\Observer;

use App\Patterns\Observer\User\User;
use App\Patterns\Observer\Products\IphoneX;
use App\Patterns\Observer\Products\BookPhp;

class Index
{
    public $user;

    public function __construct($template)
    {
        include $template;
        $this->user = new User;
        $this->iphoneX = new IphoneX;
        $this->bookPhp = new BookPhp;
    }

    public function start()
    {
        $this->user->attach($this->iphoneX);
        $this->user->updateProductName('IphoneX', 'Test');
    }
}
