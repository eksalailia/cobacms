<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
      protected function redirectTo(){
          if( Auth()->user()->role == "administrator"){
              return redirect()->route('indexadmin');
          }
          else if( Auth()->user()->role == "opd"){
            return redirect()->route('opd.opd');
        }
      }


    /**
     * Create a new controller instance.
     *
     * @return redirect()->void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
       $input = $request->all();
       $this->validate($request,[
           'email'=>'required|email',
           'password'=>'required'
       ]);

       if( auth()->attempt(array('email'=>$input['email'], 'password'=>$input['password'])) ){

        if( Auth()->user()->role == "administrator"){
            return redirect()->route('layouts.admin.admin');
        }
        elseif( Auth()->user()->role == "opd"){
            return redirect()->route('opd.opd');
        }

       }else{
           return redirect()->redirect()->route('login')->with('error','Email and password are wrong');
       }
    }
}
