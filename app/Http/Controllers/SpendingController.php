<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Spending;
use Auth;
class SpendingController extends Controller
{

    public function update(Request $request)
    {
        $this->validate($request, Spending::$rules);
        $spending = Spending::find(Auth::user()->id);
        $form = $request->all();
        unset($form['_token']);
        $spending->fill($form)->save();

        return redirect()->to('home')->with('flashmessage', '支出配分を保存しました。');
    }

    public function index()
    {
        $user = Auth::user();
        $spendings = Spending::where('user_id',$user->id)->first();
        return view('/home',compact('spendings'));
    }
}
