<?php

use App\Livewire\Pages\About;
use App\Livewire\Pages\AuthLogin;
use App\Livewire\Pages\AuthRegister;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Dashboard;
use App\Livewire\Pages\JobCreate;
use App\Livewire\Pages\JobEdit;
use App\Livewire\Pages\Jobs;
use App\Livewire\Pages\JobShow;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', Dashboard::class);
    Route::get('/about', About::class);
    Route::get('/contact', Contact::class);
    Route::get('/jobs', Jobs::class);
    Route::get('/jobs/create', JobCreate::class);
    Route::get('/jobs/{job}/edit', JobEdit::class);
    Route::get('/jobs/{job}', JobShow::class);
});

Route::middleware('guest')->group(function () {
    Route::get('/register', AuthRegister::class)->name('register');
    Route::get('/login', AuthLogin::class)->name('login');
});


