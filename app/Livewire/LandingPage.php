<?php

namespace App\Livewire;

use Livewire\Component;

class LandingPage extends Component
{
    public $title = 'Home | fludiatest.id';
    
    public function render()
    {
        return view('livewire.landing-page');
    }
}
