<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Arr;
use App\Http\Controllers\LeaderboardController;

Route::get('/', function () {
    return view('homepage');
});
Route::get('/login', function (){
    return view('login');
});
Route::get('/activities', function (){
    return view('activities');
});
Route::get('/leaderboard', function(){
    return view('leaderboard');
});
Route::post('loginUser', [UserController::class, 'login'])->name('loginUser');

Route::get('/signup', function(){
    return view('signup');
});

Route::post('register', [UserController::class, 'signup'])->name('register');

Route::post('/update-score', [LeaderboardController::class, 'updateScore']);