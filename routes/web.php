<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\RoutingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [RoutingController::class, 'home'])->name('home');

Route::get('/lang/{locale}', [LanguageController::class, 'setLocale'])->name('set-locale');

Route::get('/contact', [RoutingController::class, 'contact'])->name('contact');

Route::get('/creatio-products', [RoutingController::class, 'creatioProducts'])->name('creatio-products');

Route::get('product/{name}', [RoutingController::class, 'product'])->name('product');
//For SEO purposes
Route::prefix('{locale}')->middleware('localeHandler')->group(function () {
    Route::get('/home', [RoutingController::class, 'home']);
});
