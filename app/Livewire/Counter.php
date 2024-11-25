<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 0;

    public function increate()
    {
        $this->count++;
    }

    public function decreate()
    {
        $this->count--;
    }


    public function render()
    {
        return view('livewire.counter');
    }
}
