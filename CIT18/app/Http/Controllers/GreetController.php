<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetControllers extends Controller
{
    public function showGreeting()
    {
        return view ('greet');
    }
}
