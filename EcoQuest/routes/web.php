<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Arr;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\RewardController;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/login', function (){
    return view('login');
});
Route::get('/activities', function (){
    return view('activities');
});
//passes users to be displayed in the leaderboard
Route::get('/leaderboard', function(){
    return view('leaderboard', ['users' => \App\Models\Reward::all()]);
});
//passes rewards to be displayed
Route::get('/rewards', function (){
    return view('rewards', [ 'rewards' => \App\Models\Reward::all()]);

});
//directs user to login route
Route::post('loginUser', [UserController::class, 'login'])->name('loginUser');
//signs in user
Route::get('/signup', function(){
    return view('signup');
});

Route::post('register', [UserController::class, 'signup'])->name('register');
//updates score on the leaderboard
Route::post('/update-score', [LeaderboardController::class, 'updateScore']);