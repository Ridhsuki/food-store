<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Route;

//route register
Route::get('/register', Auth\Register::class)->name('register');
//route login
Route::get('/login', Auth\Login::class)->name('login');
//route group account
Route::middleware('auth:customer')->group(function () {

    Route::group(['prefix' => 'account'], function () {

        //route my order
        Route::get('/my-orders', Account\MyOrders\Index::class)->name('account.my-orders.index');

    });

});