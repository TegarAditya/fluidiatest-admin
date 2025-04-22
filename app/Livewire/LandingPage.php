<?php

namespace App\Livewire;

use App\Models\LearningGoal;
use Livewire\Component;

class LandingPage extends Component
{
    public $title;

    public $learningPurpose;

    public function mount()
    {
        $this->title = 'Home | fludiatest.id';
        $this->learningPurpose = LearningGoal::all();
    }

    public function render()
    {
        return view('livewire.landing-page');
    }
}
