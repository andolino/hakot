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
        $objT = Auth::guard('contractors')->user();
        $objS = Auth::guard('truckers')->user();
        if (is_null($objT) && is_null($objS)) {
            $logged_in = false;
        }
        return view('index', [
                                'logged_in' => $logged_in,
                            ]);
    }

    public function contractorsDashboard(){
        $data = DB::table('contractors')->where('id', '=', Auth::id())->first();
        return view('contractors', ['data' => $data]);
    }
    
    public function truckersDashboard(){
        $data = DB::table('truckers')->where('id', '=', Auth::id())->get();
        return view('truckers', ['data' => $data]);
    }
}
