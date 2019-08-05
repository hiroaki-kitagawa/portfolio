<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FirstInput extends Model
{
    protected $fillable = [
        'user_id',
        'fixed_income',
        'save_invest'
    ];

    public static $rules = array(
        'fixed_income' => 'integer|min:0',
        'save_invest' => 'integer|min:0',
    );
}
