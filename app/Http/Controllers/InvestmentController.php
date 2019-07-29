<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Investment;
use App\Spending;
use Auth;

class InvestmentController extends Controller
{
    public function create(Request $request)
    {
        $this->validate($request, Investment::$rules);
    }

    public function index()
    {
        $user = Auth::user();
        $investments = Investment::where('user_id',$user->id)->first();
        return view('/home', compact('investments'));
    }
}
