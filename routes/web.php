<?php

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(["verified"]);

Route::middleware('verified')->namespace('App\Http\Controllers\Reminder')->group(function() {
    Route::get('/reminders','IndexController')->name('reminders.index');
    Route::get('/reminders/create','CreateController')->name('reminders.create');
    Route::post('/reminders','StoreController')->name('reminders.store');
    Route::get('/reminders/{recorder}','ShowController')->name('reminders.show');
    Route::get('/reminders/{recorder}/edit','EditController')->name('reminders.edit');
    Route::patch('/reminders/{recorder}','UpdateController')->name('reminders.update');
    Route::delete('/reminders/{recorder}','DeleteController')->name('reminders.delete');
});

Route::middleware('verified')->namespace('App\Http\Controllers\Feedback')->group(function() {
    Route::get('/feedbacks','IndexController')->name('feedbacks.index');
    Route::post('/feedbacks','StoreController')->name('feedbacks.store');
});

Route::middleware('admin')->prefix('admin')->namespace('App\Http\Controllers\Admin\Reminder')->group(function() {
    Route::get('/reminders','IndexController')->name('admin.reminders.index');
});

