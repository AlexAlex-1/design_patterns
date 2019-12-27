<?php
namespace App\Patterns\Observer\Products;

class IphoneX implements \SplObserver
{
    public $name = 'IphoneX';

    public function update(\SplSubject $subject)
    {
        echo 'You changed IphoneX';
    }
}
