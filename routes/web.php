<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\MainComponent;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',MainComponent::class);
// Route::get('/about',AboutComponent::class);
// Route::get('/resume',ResumeComponent::class);
// Route::get('/portfolio',PortfolioComponent::class);
// Route::get('/services',ServicesComponent::class);
// Route::get('/contact',ContactComponent::class);
