<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogController extends Controller
{
    public function logproblem(){
        return view('logproblem');
    }
}
