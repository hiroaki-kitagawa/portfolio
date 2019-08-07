<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Investment;
use App\Spending;
use App\FirstInput;
use App\User;
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
        $user_id = Auth::User()->id;

        $spendings = New Spending;

        if($fixed_income > 0 ) {
            $spendings->user_id = $user_id;
            $spendings->fixed_income = $fixed_income;
            $spendings->fixed_rent_budget = ($fixed_income * 30) / 100;
            $spendings->fixed_rent = ($fixed_income * 30) / 100;
            $spendings->fixed_insurance_budget = ($fixed_income * 2) / 100;
            $spendings->fixed_insurance = ($fixed_income * 2) / 100;
            $spendings->variable_utilities_budget = ($fixed_income * 5) / 100;
            $spendings->variable_utilities = ($fixed_income * 5) / 100;
            $spendings->variable_food_budget = ($fixed_income * 12) / 100;
            $spendings->variable_food = ($fixed_income * 12) / 100;
            $spendings->variable_daily_budget = ($fixed_income * 2) / 100;
            $spendings->variable_daily = ($fixed_income * 2) / 100;
            $spendings->variable_transportation_budget = ($fixed_income * 2) / 100;
            $spendings->variable_transportation = ($fixed_income * 2) / 100;
            $spendings->variable_automotive_budget = ($fixed_income * 2) / 100;
            $spendings->variable_automotive = ($fixed_income * 2) / 100;
            $spendings->selfinvest_communication_budget = ($fixed_income * 5) / 100;
            $spendings->selfinvest_communication = ($fixed_income * 5) / 100;
            $spendings->selfinvest_education_budget = ($fixed_income * 5) / 100;
            $spendings->selfinvest_education = ($fixed_income * 5) / 100;
            $spendings->selfinvest_medical_budget = ($fixed_income * 2) / 100;
            $spendings->selfinvest_medical = ($fixed_income * 2) / 100;
            $spendings->selfinvest_allowance_budget = ($fixed_income * 4) / 100;
            $spendings->selfinvest_allowance = ($fixed_income * 4) / 100;
            $spendings->selfinvest_other_budget = ($fixed_income * 4) / 100;
            $spendings->selfinvest_other = ($fixed_income * 4) / 100;
            $spendings->storeinvest_saving_budget = ($save_invest * 20) / 100;
            $spendings->storeinvest_saving = ($save_invest * 20) / 100;
            $spendings->storeinvest_investment_budget = ($save_invest * 80) / 100;
            $spendings->storeinvest_investment = ($save_invest * 80) / 100;
        }
        $spendings->save();

        $investments = New Investment;
        $investments->user_id = $user_id;
        $investments->total_amount = $save_invest;
        $investments->save();

        return redirect('home')->with('spendings', $spendings)->with('investments',  $investments);
    }

}
