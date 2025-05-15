<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\RoutingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [RoutingController::class, 'home'])->name('home');
Route::post('/contact', [ContactController::class, 'receiveMessage'])->name('contact');
