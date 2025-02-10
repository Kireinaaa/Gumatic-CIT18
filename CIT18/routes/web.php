<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemController;
use App\Http\Controller\GreetController;

Route::get('/' function(){
    return view('welcome');

});

Route::get('/hello', function (){
    return 'hi';
});

Route::get(
    '/greet', 
    [GreetController::class, 'greetMethod']
);