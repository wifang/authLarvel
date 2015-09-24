<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Reponse;
use App\User;
use App\Models\Logincookie;
use Auth;
use Cookie;
use App\Http\Controllers\Controller;
use Response;
use DB;
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
   
    public function index(Request $request)
    { 
        if(Auth::check()){
            $pieces = explode(";", $request->cookie('token'));
            $token = str_replace("token=", "", $pieces[0]); 
            $id = Auth::user()->id;
            $currentuser = DB::table('logincookies')->where('user_id', '=', $request->cookie('user_id'))
                    ->where('login_token','=',$token )
                    ->get();
            echo $token; 
          
            if (count($currentuser)==0){ 
                Auth::logout();
                Cookie::forget('token');
                Cookie::forget('user_id');
                return view('auth/login');
            } else {
                return view('home');
            }
           
           if(empty($currentuser->login_token)){ 
              //  Cookie::forget('token');
            
                $pieces = explode(";", $request->cookie('token'));
                $token = str_replace("token=", "", $pieces[0]); 
               
                $currentuser = new Logincookie();
                $token_cookie = Cookie::make('token', rand(1,100),360);
                $user_cookie = Cookie::make('user_id', $id,360);
                $currentuser->login_token = $token;
                $currentuser->user_id = $id;
                $response = new \Illuminate\Http\Response(view('home'));
                $currentuser->save(); 
                $response->withCookie('token', $token_cookie);
                $response->withCookie('user_id', $id);
                 return $response;
            }
        }
        else{
            return view('auth/login');
        }
    }
}


