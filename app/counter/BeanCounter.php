<?php

namespace App\Counter;

use App\Counter\Counter;

// Create a class App\Counter\BeanCounter which has an addBean and howMany method. It should accept an App\Counter\Counter object in the constructor. When you call howMany it should return the number of times that addBean has been called. Make sure you use the Counter class rather than rewriting the increment logic.

class BeanCounter 
{
    private $counter; 

    public function __construct(Counter $counter) 
    {
        $this->counter = $counter;
    }

    public function addBean()   : BeanCounter
    {
        $this->counter->increment();
        return $this;
    }

    public function howMany()   : int
    {
        return $this->counter->count();
    }
}

// public function beanCounter()
// {
//     echo "\n02)\n";

//     $counter = new Counter\Counter();
//     $beans = new Counter\BeanCounter($counter);
//     $beans->addBean()->addBean();

//     dump($beans->howMany()); // 2

//     don't worry too much about what this bit of code does
//     you just want it to echo "Not accepted. Good work!"
//     if you try to pass anything other than a Counter to BeanCounter
//     try {
//         new Counter\BeanCounter(12);
//         dump("Accepted. Oops!"); // if you see this, something's not right
//     } catch (\TypeError $e) {
//         dump("Not accepted. Good work!"); // if you see this, you've done it right
//     }
// }



