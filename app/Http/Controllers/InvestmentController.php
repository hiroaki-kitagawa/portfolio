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

        // フラッシュメッセージの表示内容を設定する
        $notification = array (
            'message' => '貯蓄・投資配分を保存しました。',
            'alert-type' => 'success'
        );

        return redirect()->to('home')->with($notification);
    }

    public function index()
    {
        $user = Auth::user();
        $investments = Investment::where('user_id',$user->id)->first();
        return view('/home', compact('investments'));
    }

}
