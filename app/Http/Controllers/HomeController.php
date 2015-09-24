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
             if($request->cookie('token')){
                $pieces = explode(";", $request->cookie('token'));
                $token = str_replace("token=", "", $pieces[0]); 
               // $cookie = Cookie::forget('token');
              //  return Response::make('cookie has bee deleted')->withCookie($cookie);
                $currentuser = DB::table('logincookies')->where('user_id', '=', $request->cookie('user_id'))
                        ->where('login_token','=',$token )
                        ->get();
                 if (count($currentuser)==0){ 
                    Auth::logout();
                    $cookie = Cookie::forget('token');
                    Cookie::forget('user_id');
                    return Response::make('cookie has bee deleted')->withCookie($cookie);
                   
                } else {
                    return view('home');
                }
            }else{ 
                $token_cookie = Cookie::make('token', rand(1,100),360);
                $pieces = explode(";", $token_cookie);
                $token = str_replace("token=", "", $pieces[0]); 
               
                $id = Auth::user()->id;
                $currentuser = new Logincookie();
                
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

