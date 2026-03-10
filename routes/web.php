<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('contact', function () {
    return view('contact');
})->name('contact');
Route::get('jobs', function () {
    return view('userPages.joblisting');
})->name('jobs');
require __DIR__.'/auth.php';
