<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spending extends Model
{
    protected $fillable = [
        'fixed_income',
        'extra_income',
        'fixed_rent',
        'fixed_insurance',
        'variable_utilities',
        'variable_food',
        'variable_daily',
        'variable_transportation',
        'variable_automotive',
        'variable_communication',
        'variable_education',
        'variable_medical',
        'variable_clothing',
        'variable_allowance',
        'variable_pocketmoney',
        'variable_favorite',
        'variable_saving',
        'variable_investment',
    ];
}
