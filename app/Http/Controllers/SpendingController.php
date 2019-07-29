<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Spending;
use Auth;
class SpendingController extends Controller
{
    public function add()
    {

    }

    public function create(Request $request)
    {
        $this->validate($request, Spending::$rules);

        $spending = new Spending;
        $form = $request->all();
    }

    public function edit()
    {

    }
    public function update()
    {

    }

    public function index()
    {
        $user = Auth::user();
        // $income = Income::where('user_id',$user->id)->first();
        $spendings = Spending::where('user_id',$user->id)->first();
        // return view('home')->with('user', $user)->with('income', $income);
        return view('/home',compact('user','spendings'));
    }
}
