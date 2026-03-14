<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\User\Profile;


Route::get('contact', function () {
    return view('contact');
})->name('contact');
Route::get('/jobs', [JobsController::class, 'jobs'])->name('jobs');
Route::get('/', [JobsController::class, 'index'])->name('home');
Route::get('/company/{id}', [JobsController::class, 'company'])->name('company.jobs');
Route::post('/searchhome', [JobsController::class, 'search'])->name('search.home');
Route::get('/job/{id}', [JobsController::class, 'job'])->name('job');
Route::post('/search', [JobsController::class, 'searchjob'])->name('search');
Route::view('/profile','userPages.profile');





Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [Profile::class, 'showSkills'])->name('show.skills');
    Route::post('/add-skill', [Profile::class, 'addSkill'])->name('add.skill');
    Route::delete('/delete-skill', [Profile::class, 'deleteSkill'])->name('delete.skill');
    Route::delete('/delete-all-skills', [Profile::class, 'deleteall'])->name('delete.all');
});

Route::middleware(['auth'])->group(function () {
    // ... existing skill routes ...

    // Project Routes
    Route::get('/projects/all', [Profile::class, 'showall'])->name('projects.all');
    Route::post('/projects/add', [Profile::class, 'addProject'])->name('projects.add');
    Route::get('/projects/show/{id}', [Profile::class, 'show'])->name('projects.show');
    Route::post('/projects/edit/{id}', [Profile::class, 'edit'])->name('projects.edit');
    Route::post('/projects/delete', [Profile::class, 'deleteProject'])->name('projects.delete');
});
Route::middleware(['auth'])->group(function () {
    // Education Routes
    Route::get('/education/all', [Profile::class, 'showAllEducation'])->name('education.all');
    Route::post('/education/add', [Profile::class, 'addEducation'])->name('education.add');
    Route::get('/education/show/{id}', [Profile::class, 'showEducation'])->name('education.show');
    Route::post('/education/edit/{id}', [Profile::class, 'editEducation'])->name('education.edit');
    Route::post('/education/delete', [Profile::class, 'deleteEducation'])->name('education.delete');
});
Route::prefix('experience')->group(function () {
    Route::post('/add', [Profile::class, 'addExperience']);
    Route::get('/all', [Profile::class, 'showAllExperience']);
    Route::get('/show/{id}', [Profile::class, 'showExperience']);
    Route::post('/edit/{id}', [Profile::class, 'editExperience']);
    Route::post('/delete', [Profile::class, 'deleteExperience']);
});
Route::post('/coverPhoto',[Profile::class, 'addCover'])->name('addcover');
require __DIR__.'/auth.php';
