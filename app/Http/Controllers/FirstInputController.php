<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Investment;
use App\Spending;
use App\FirstInput;
use Auth;

class FirstInputController extends Controller
{
    public function index(){
        return view('firstinput');
    }

    public function add(Request $request)
    {
        $this->validate($request, FirstInput::$rules);

        $fixed_income = $request->fixed_income;
        $save_invest = $request->save_invest;

        $spending = New Spending;
        $spending['user_id'] = Auth::user()->id;

        if($fixed_income > 0) {
            $spending['fixed_income'] = $fixed_income;
            $spending['extra_income'] = 0;
            $spending['fixed_rent_budget'] = ($fixed_income * 100) / 40;
            $spending['fixed_income'] = $fixed_income;
            $spending['fixed_income'] = $fixed_income;
            $spending['fixed_income'] = $fixed_income;
            $spending['fixed_income'] = $fixed_income;
            $spending['fixed_income'] = $fixed_income;
            $spending['fixed_income'] = $fixed_income;
            $spending['fixed_income'] = $fixed_income;
            $spending['fixed_income'] = $fixed_income;
            $spending['fixed_income'] = $fixed_income;
            $spending['fixed_income'] = $fixed_income;
            $spending['fixed_income'] = $fixed_income;
            $spending['fixed_income'] = $fixed_income;
            $spending['fixed_income'] = $fixed_income;
        } else {
            for($i=0; $i<=43; $i++){
                
            }
        }
        // dd(count($spending));
        // dd(Spending::$fillable);
        dd($spending);

        $spending->save();



        return view('firstinput');
    }
}
