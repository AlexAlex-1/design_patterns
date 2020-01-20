<?php
namespace App\Patterns\Observer\User;

class User implements \SplObserver
{
    public $name = 'User';

    public function update(\SplSubject $subject)
    {
        echo $subject->name;
    }
}
