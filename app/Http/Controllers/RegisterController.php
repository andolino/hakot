<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Teachers;
use App\Models\Students;
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
        $this->middleware('guest:contractor');
        $this->middleware('guest:trucker');
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
    public function showContractorRegisterForm(){
        $countries = DB::table('countries')->get();
        return view('auth.contractor-registration', ['url' => 'contractor', 'countries' => $countries]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showTruckerRegisterForm(){
        return view('auth.register', ['url' => 'trucker']);
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
    protected function createContractor(Request $request){
        $request->validate([
            // 'username'        => 'required|string|max:255',
            'email'           => 'required|string|email|max:255|unique:contractor',
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
        Teachers::create([
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
        return redirect()->intended('login/contractor');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function createTrucker(Request $request){
        $request->validate([
            // 'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:trucker',
            'password' => 'required|string|min:6'
            // 'password' => 'required|string|min:6|confirmed'
        ]);
        Students::create([
            // 'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect()->intended('login/trucker');
    }
}