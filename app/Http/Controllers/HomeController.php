<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Spending;
use App\Investment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $spendings = Spending::where('user_id',$user->id)->first();
        $investments = Investment::where('user_id',$user->id)->first();
        // $data = array_merge($spendings, $investments);
        // return view('home')->with('user', $user)->with('spendings', $spendings)->with('investments', $investments);
        return view('home',compact('spendings', 'investments'));
    }
}
