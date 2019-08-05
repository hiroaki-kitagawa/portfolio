<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Investment;
use Auth;

class InvestmentController extends Controller
{

    public function update(Request $request)
    {
        $this->validate($request, Investment::$rules);
        $investment = Investment::find(Auth::user()->id);
        $form = $request->all();
        // dd($investment,$form);
        unset($form['_token']);
        $investment->fill($form)->save();

        // \Session::flash('flash_message_ok', '保存しました');
        // return redirect('home')->with('flash_message', '保存しました');
        // return redirect()->to('home')->with('flashmessage', '貯蓄・投資配分を保存しました。');
    }

    public function index()
    {
        $user = Auth::user();
        $investments = Investment::where('user_id',$user->id)->first();
        return view('/home', compact('investments'));
    }

}
