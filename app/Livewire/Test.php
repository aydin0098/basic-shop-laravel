<?php

namespace App\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $name;
    public function render()
    {
        return view('livewire.test');
    }

    public function store()
    {
        dd($this->name);

    }


}
