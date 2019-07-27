<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Income;
use Auth;

class IncomeController extends Controller
{
    public function add()
    {

    }

    public function create(Request $request)
    {
        $this->validate($request, Income::$rules);
    }

    public function index()
    {
        $user = Auth::user();
        // $income = json_encode(Income::where('user_id',$user->id)->first());
        $income = Income::where('user_id',$user->id)->first();
        // return view('home')->with('user', $user)->with('income', $income);
        return view('home', compact('user','income'));
    }

}
