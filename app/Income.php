<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    public function store(Request $request){
        $income = new Income;
        $income->fixed_income = $request->fixed_income;
        $income->extra_income = $request->extra_income;
        $user->save();

        
    }
}
