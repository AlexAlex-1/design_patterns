<?php
namespace App\Patterns\Observer\Products;

/*
 * Event Manager
 */

class IphoneX implements \SplSubject
{
    private $observers;

    public $name = 'IphoneX';

    public function __construct(
    ) {
        $this->observers = new \SplObjectStorage;
    }

    public function attach(\SplObserver $observer)
    {
        $name = $observer->name;
        echo "$name attached on " . $this->name . PHP_EOL;
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer)
    {
        $this->observers->detach($observer);
        $name = $observer->name;
        echo "$name detached from " . $this->name;
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function updateProductName($name)
    {
        foreach($this->observers as $observer) {
            if($this->name != $name) {
                echo $this->name . 'was updated to ';
                $this->name = $name;
                $this->notify();
            }
        }
    }
}
