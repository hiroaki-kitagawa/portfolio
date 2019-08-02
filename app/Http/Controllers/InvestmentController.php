<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Investment;
use Auth;

class InvestmentController extends Controller
{
    public function create(Request $request)
    {
        $this->validate($request, Investment::$rules);
        $investment = new Investment;
        $form = $request->all();
        // $investments = Investment::where('user_id',Auth::user()->id)->first();
        // dd($investment);
        // $form->put('id',Auth::user()->id);
        // $form->put('user_id',Auth::user()->user_id);
        dd($form);
        unset($form['_token']);
        $investment->fill($form)->save();

        return view('home');
    }

    public function index()
    {
        $user = Auth::user();
        $investments = Investment::where('user_id',$user->id)->first();
        return view('/home', compact('investments'));
    }

}
