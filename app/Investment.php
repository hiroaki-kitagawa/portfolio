<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    protected $guarded = [
        'id'
    ];

    protected $attributes = [
        'user_id' => '',
        'total_amount' => 0,
        'cash' => 0,
        'government_bonds' => 0,
        'domestic_stocks' => 0,
        'developed_stocks' => 0,
        'emerging_stocks' => 0,
        'domestic_bonds' => 0,
        'developed_bonds' => 0,
        'emerging_bonds' => 0,
        'japan_riet' => 0,
        'oversea_riet' => 0,
        'other' => 0
    ];

    public static $rules = array(
        'total_amount' => 'integer|min:0',
        'cash' => 'integer|min:0',
        'government_bonds' => 'integer|min:0',
        'domestic_bonds' => 'integer|min:0',
        'developed_bonds' => 'integer|min:0',
        'emerging_bonds' => 'integer|min:0',
        'domestic_stocks' => 'integer|min:0',
        'developed_stocks' => 'integer|min:0',
        'emerging_stocks' => 'integer|min:0',
        'japan_riet' => 'integer|min:0',
        'oversea_riet' => 'integer|min:0',
        'other' => 'integer|min:0'
    );


}
