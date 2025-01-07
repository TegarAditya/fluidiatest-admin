<?php

use App\Livewire\LandingPage;
use App\Livewire\TutorialPage;
use Illuminate\Support\Facades\Route;

Route::get('/', LandingPage::class);
Route::get('/tutorial', TutorialPage::class);
