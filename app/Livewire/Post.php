<?php

namespace App\Livewire;

use Livewire\Component;

class Post extends Component
{
    public bool $isCollapsed = false;

    public int $counter = 0;

    public function next()
    {
        $this->counter++;

        $this->isCollapsed = true;
    }

    public function render()
    {
        return view('livewire.post');
    }
}
