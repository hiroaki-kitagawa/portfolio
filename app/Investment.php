<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'total_amount',
        'cash',
        'government_bonds',
        'domestic_stocks',
        'developed_stocks',
        'emerging_stocks',
        'domestic_bonds',
        'developed_bonds',
        'emerging_bonds',
        'japan_riet',
        'oversea_riet',
        'other'
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
