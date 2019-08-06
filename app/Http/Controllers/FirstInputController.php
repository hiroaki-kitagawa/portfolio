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

        // 家計モデル(都心:10 地方:20 単身:01 夫婦:02 3人家族:03)
        $model_flg = 21;
        $rate_list = [
            'single' => [30,2,5,12,2,2,2,5,5,0,4,4,5,20],
            'dinks' => [25,2,5,12,2,2,2,5,5,0,4,4,5,20],
            'onechild' => [25,4,5,12,4,3,3,5,8,4,4,4,5,10],
        ];

        if($fixed_income > 0 ) {
            $spending['fixed_income'] = $fixed_income;
            $spending['fixed_rent_budget'] = ($fixed_income * 30) / 100;
            $spending['fixed_rent'] = ($fixed_income * 30) / 100;
            $spending['fixed_insurance_budget'] = ($fixed_income * 2) / 100;
            $spending['fixed_insurance'] = ($fixed_income * 2) / 100;
            $spending['variable_utilities_budget'] = ($fixed_income * 5) / 100;
            $spending['variable_utilities'] = ($fixed_income * 5) / 100;
            $spending['variable_food_budget'] = ($fixed_income * 12) / 100;
            $spending['variable_food'] = ($fixed_income * 12) / 100;
            $spending['variable_daily_budget'] = ($fixed_income * 2) / 100;
            $spending['variable_daily'] = ($fixed_income * 2) / 100;
            $spending['variable_transportation_budget'] = ($fixed_income * 2) / 100;
            $spending['variable_transportation'] = ($fixed_income * 2) / 100;
            $spending['variable_automotive_budget'] = ($fixed_income * 2) / 100;
            $spending['variable_automotive'] = ($fixed_income * 2) / 100;
            $spending['selfinvest_communication_budget'] = ($fixed_income * 5) / 100;
            $spending['selfinvest_communication'] = ($fixed_income * 5) / 100;
            $spending['selfinvest_education_budget'] = ($fixed_income * 5) / 100;
            $spending['selfinvest_education'] = ($fixed_income * 5) / 100;
            $spending['selfinvest_medical_budget'] = ($fixed_income * 0) / 100;
            $spending['selfinvest_medical'] = ($fixed_income * 0) / 100;
            $spending['selfinvest_allowance_budget'] = ($fixed_income * 4) / 100;
            $spending['selfinvest_allowance'] = ($fixed_income * 4) / 100;
            $spending['selfinvest_other_budget'] = ($fixed_income * 4) / 100;
            $spending['selfinvest_other'] = ($fixed_income * 4) / 100;
            $spending['storeinvest_saving_budget'] = ($fixed_income * 5) / 100;
            $spending['storeinvest_saving'] = ($fixed_income * 5) / 100;
            $spending['storeinvest_investment_budget'] = ($fixed_income * 20) / 100;
            $spending['storeinvest_investment'] = ($fixed_income * 20) / 100;
        }

        $investment = New Investment;
        $investment['user_id'] = Auth::user()->id;


        dd($spending);
        $spending->save();
        $investment->save();

        return view('firstinput');
    }

    private function set_spending(){

    }
}
