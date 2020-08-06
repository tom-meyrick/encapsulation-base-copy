<?php

namespace App\Counter;

class Counter 
{
    private $count = 0; 

    public function increment() 
    {
        $this->count += 1;
    }

    public function count() : Counter
    {
        $this->count; 
        return $this;
    }

}

// $counter = new Counter\Counter();
// $counter->increment();
// $counter->increment();
// $counter->increment();

// dump($counter->count()); // 3