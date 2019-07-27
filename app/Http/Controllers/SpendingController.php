<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Spending;
class SpendingController extends Controller
{
    public function add()
    {

    }

    public function create(Request $request)
    {
        $this->validate($request, Spending::$rules);

        $spending = new Spending;
        $form = $request->all();

        
    }

    public function edit()
    {

    }
    public function update()
    {

    }
}
