<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;


class LoginController extends Controller{
    
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    public function __construct(){
            $this->middleware('guest')->except('logout');
            $this->middleware('guest:contractors')->except('logout');
            $this->middleware('guest:truckers')->except('logout');
    }

     public function showContractorsLoginForm(){
        $logged_in = true;
        $objT = Auth::guard('contractors')->user();
        $objS = Auth::guard('truckers')->user();
        if (is_null($objT) && is_null($objS)) {
            $logged_in = false;
        }
        return view('auth.login', [
            'url' => 'contractors', 
            'logged_in' => $logged_in
        ]);
    }

    public function contractorsLogin(Request $request){
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        if (Auth::guard('contractors')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/contractors');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function showTruckersLoginForm(){
        $logged_in = true;
        $objT = Auth::guard('contractors')->user();
        $objS = Auth::guard('truckers')->user();
        if (is_null($objT) && is_null($objS)) {
            $logged_in = false;
        }
        return view('auth.login', ['url' => 'truckers', 'logged_in' => $logged_in]);
    }

    public function truckersLogin(Request $request){
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('truckers')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/truckers');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}