<?php
namespace App\Patterns\Observer\User;

class Wholesaler implements \SplObserver
{
    public $name = 'Wholesaler';

    public function update(\SplSubject $subject)
    {
        echo 'You changed IphoneX';
    }
}
