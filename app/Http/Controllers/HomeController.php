<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */
   
    public function index()
    {
        if(Auth::check()){
            return view('home');
        }
        else{
            return view('auth/login');
        }
    }
}
