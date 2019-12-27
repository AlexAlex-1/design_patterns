<?php
namespace App\Patterns\Observer\Products;

class BookPhp implements \SplObserver
{
    public $name = 'BookPhp';

    public function update(\SplSubject $subject)
    {
        echo 'You changed BookPhp';
    }
}
