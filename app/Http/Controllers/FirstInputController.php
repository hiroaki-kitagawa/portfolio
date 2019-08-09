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
        $living_funds = $fixed_income - $save_invest;
        $user_id = Auth::User()->id;

        $spendings = New Spending;

        if($fixed_income > 0 ) {
            $spendings->user_id = $user_id;
            $spendings->fixed_income = $fixed_income;
            $spendings->fixed_rent_budget = ($living_funds * 30) / 100;
            $spendings->fixed_rent = ($living_funds * 30) / 100;
            $spendings->fixed_insurance_budget = ($living_funds * 2) / 100;
            $spendings->fixed_insurance = ($living_funds * 2) / 100;
            $spendings->variable_utilities_budget = ($living_funds * 5) / 100;
            $spendings->variable_utilities = ($living_funds * 5) / 100;
            $spendings->variable_food_budget = ($living_funds * 12) / 100;
            $spendings->variable_food = ($living_funds * 12) / 100;
            $spendings->variable_daily_budget = ($living_funds * 2) / 100;
            $spendings->variable_daily = ($living_funds * 2) / 100;
            $spendings->variable_transportation_budget = ($living_funds * 2) / 100;
            $spendings->variable_transportation = ($living_funds * 2) / 100;
            $spendings->variable_automotive_budget = ($living_funds * 2) / 100;
            $spendings->variable_automotive = ($living_funds * 2) / 100;
            $spendings->selfinvest_communication_budget = ($living_funds * 5) / 100;
            $spendings->selfinvest_communication = ($living_funds * 5) / 100;
            $spendings->selfinvest_education_budget = ($living_funds * 5) / 100;
            $spendings->selfinvest_education = ($living_funds * 5) / 100;
            $spendings->selfinvest_medical_budget = ($living_funds * 2) / 100;
            $spendings->selfinvest_medical = ($living_funds * 2) / 100;
            $spendings->selfinvest_allowance_budget = ($living_funds * 4) / 100;
            $spendings->selfinvest_allowance = ($living_funds * 4) / 100;
            $spendings->selfinvest_other_budget = ($living_funds * 4) / 100;
            $spendings->selfinvest_other = ($living_funds * 4) / 100;
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
