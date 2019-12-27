<?php
namespace App\Patterns\Observer\User;

class User implements \SplSubject
{
    private $observers;

    public function __construct(
    ) {
        $this->observers = new \SplObjectStorage;
    }

    public function attach(\SplObserver $observer)
    {
        $name = $observer->name;
        echo "You attached on $name";
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer)
    {
        $this->observers->detach($observer);
        $name = $observer->name;
        echo "You detached on $name";
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function updateProductName($currentName, $name)
    {
        foreach($this->observers as $product) {
            if($product->name == $currentName) {
                $product->name = $name;
                $this->notify();
            }
        }
    }
}
