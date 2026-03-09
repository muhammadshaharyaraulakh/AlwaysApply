<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication\SocialAuthController;

Route::get('/login', function () {
    return view('userAuthentication.login');
})->name('login');
Route::get('/register', function () {
    return view('userAuthentication.signup');
})->name('register');

Route::get('/login/google', [SocialAuthController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);    
Route::get('/login/github', [SocialAuthController::class, 'redirectToGithub'])->name('login.github');
Route::get('/login/github/callback', [SocialAuthController::class, 'handleGithubCallback']);    