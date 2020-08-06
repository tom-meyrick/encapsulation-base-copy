<?php

namespace App\Counter;

class Counter 
{
    private $count = 0; 

    public function increment() 
    {
        $this->count += 1;
    }

    public function count() : int
    {
        return $this->count; 
    }

}

// $counter = new Counter\Counter();
// $counter->increment();
// $counter->increment();
// $counter->increment();

// dump($counter->count()); // 3