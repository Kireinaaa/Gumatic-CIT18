<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

Route::get('/', function () {
    return view('welcome');
});

//Route for greeting
Route::get('/greet', [GreetController::class, 'showGreeting']);
