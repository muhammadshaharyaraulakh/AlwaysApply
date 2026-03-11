<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication\SocialController;
use App\Http\Controllers\Authentication\UserAuthentication;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JobsController;

Route::get('/', [JobsController::class, 'index'])->name('/');
Route::get('/register', function () {
    return view('userAuthentication.signup');
})->name('register');
Route::post('/register', [UserAuthentication::class, 'registrationOtp'])->name('register.otp');
Route::post('/verify', [UserAuthentication::class, 'verify'])->name('verify.otp');
Route::view('/confirm-email', 'userAuthentication.confirmEmail')->name('confirm.email');
Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('/');
})->name('logout');

Route::get('/login', function () {
    return view('userAuthentication.login');
})->name('login');


Route::get('/login/google', [SocialController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [SocialController::class, 'handleGoogleCallback']);

Route::get('/login/github', [SocialController::class, 'redirectToGithub'])->name('login.github');
Route::get('/login/github/callback', [SocialController::class, 'handleGithubCallback']);