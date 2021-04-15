<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){   
        $logged_in = true;
        $objT = Auth::guard('contractor')->user();
        $objS = Auth::guard('trucker')->user();
        if (is_null($objT) && is_null($objS)) {
            $logged_in = false;
        }
        return view('index', [
                                'logged_in' => $logged_in,
                            ]);
    }

    public function contractorDashboard(){
        $data = DB::table('contractor')->where('id', '=', Auth::id())->first();
        return view('contractor', ['data' => $data]);
    }
    
    public function truckerDashboard(){
        $data = DB::table('trucker')->where('id', '=', Auth::id())->get();
        return view('trucker', ['data' => $data]);
    }
}
