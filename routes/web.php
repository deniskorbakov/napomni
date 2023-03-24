<?php

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->namespace('App\Http\Controllers\Reminder')->group(function() {
    Route::get('/reminders','IndexController')->name('reminders.index');
    Route::get('/reminders/create','CreateController')->name('reminders.create');
    Route::post('/reminders','StoreController')->name('reminders.store');

});

