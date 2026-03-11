<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;


Route::get('contact', function () {
    return view('contact');
})->name('contact');
Route::get('jobs', function () {
    return view('userPages.joblisting');
})->name('jobs');
Route::get('/', [JobsController::class, 'index'])->name('home');

Route::get('/job/{id}', [JobsController::class, 'job'])->name('job');
require __DIR__.'/auth.php';
