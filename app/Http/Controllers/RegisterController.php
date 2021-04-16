<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contractors;
use App\Models\Truckers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
        $this->middleware('guest:contractors');
        $this->middleware('guest:truckers');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showContractorsRegisterForm(){
        $countries = DB::table('countries')->get();
        return view('auth.contractors-registration', ['url' => 'contractors', 'countries' => $countries]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showTruckersRegisterForm(){
        return view('auth.register', ['url' => 'truckers']);
    }

    /**
     * @param array $data
     *
     * @return mixed
     */
    

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function createContractors(Request $request){
        $request->validate([
            // 'username'        => 'required|string|max:255',
            'email'           => 'required|string|email|max:255|unique:contractors',
            'password'        => 'required|string|min:6'
            // 'password'        => 'required|string|min:6|confirmed'
            // 'lastname'        => 'required|string',
            // 'middlename'      => 'required|string',
            // 'firstname'       => 'required|string',
            // 'rate_per_hr'     => 'required|numeric',
            // 'country_id'      => 'required',
            // 'objective_title' => 'required|string',
            // 'objective_text'  => 'required|string'
        ]);
        Contractors::create([
            // 'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
            // 'lastname' => $request->lastname,
            // 'middlename' => $request->middlename,
            // 'firstname' => $request->firstname,
            // 'rate_per_hr' => $request->rate_per_hr,
            // 'country_id' => $request->country_id,
            // 'objective_title' => $request->objective_title,
            // 'objective_text'  => $request->objective_text
        ]);
        return redirect()->intended('login/contractors');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function createTruckers(Request $request){
        $request->validate([
            // 'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:truckers',
            'password' => 'required|string|min:6'
            // 'password' => 'required|string|min:6|confirmed'
        ]);
        Truckers::create([
            // 'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect()->intended('login/truckers');
    }
}