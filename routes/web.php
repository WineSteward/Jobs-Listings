<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;




Route::controller(JobController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/jobs/create', 'create')->middleware('auth');
    Route::post('/jobs', 'store')->middleware('auth');
});



Route::get('/search', SearchController::class);

Route::get('/tags/{tag:name}', TagController::class);


Route::controller(RegisteredUserController::class)->group(function () {
    Route::get('/register', 'create')->middleware('guest');
    Route::post('/register', 'store')->middleware('guest');
});


Route::controller(SessionController::class)->group(function () {
    Route::get('/login', 'create')->middleware('guest')->name('login');
    Route::post('/login', 'store')->middleware('guest');
    Route::delete('/logout', 'destroy')->middleware('auth');
});




