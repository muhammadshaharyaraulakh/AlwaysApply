<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('contact', function () {
    return view('contact');
})->name('contact');
require __DIR__.'/auth.php';
