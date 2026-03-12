<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;


Route::get('contact', function () {
    return view('contact');
})->name('contact');
Route::get('/jobs', [JobsController::class, 'jobs'])->name('jobs');
Route::get('/', [JobsController::class, 'index'])->name('home');
Route::get('/company/{id}', [JobsController::class, 'company'])->name('company.jobs');
Route::post('/searchhome', [JobsController::class, 'search'])->name('search.home');
Route::get('/job/{id}', [JobsController::class, 'job'])->name('job');
Route::post('/search', [JobsController::class, 'searchjob'])->name('search');
require __DIR__.'/auth.php';
