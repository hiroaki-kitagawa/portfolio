<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    protected $fillable = [
        'total_amout',
        'domestic_bonds',
        'developed_bonds',
        'emerging_bonds',
        'domestic_stocks',
        'developed_stocks',
        'emerging_stocks',
        'japan_riet',
        'oversea_riet'
    ];


}
