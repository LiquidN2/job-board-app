<?php

use App\Livewire\Pages\About;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Dashboard;
use App\Livewire\Pages\Jobs;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);
Route::get('/about', About::class);
Route::get('/contact', Contact::class);
Route::get('/jobs', Jobs::class);
