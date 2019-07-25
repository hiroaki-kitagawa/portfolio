<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function add()
    {

    }

    public function create(Request $request)
    {
        $this->validate($request, Income::$rules);
    }

}
