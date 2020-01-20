<?php
namespace App\Patterns\Observer;

use App\Patterns\Observer\User\User;
use App\Patterns\Observer\Products\IphoneX;
use App\Patterns\Observer\Products\BookPhp;
use App\Patterns\Observer\User\Wholesaler;

class Index
{
    public $user;

    public function __construct($template)
    {
        include $template;
        $this->user = new User;
        $this->wholesaler = new Wholesaler;
        $this->iphoneX = new IphoneX;
        $this->bookPhp = new BookPhp;
    }

    public function start()
    {
        $this->iphoneX->attach($this->user);
        $this->iphoneX->attach($this->wholesaler);
        $this->iphoneX->updateProductName('Test');
    }
}
