<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Route;

//route register
Route::get('/register', Auth\Register::class)->name('register');
//route login
Route::get('/login', Auth\Login::class)->name('login');