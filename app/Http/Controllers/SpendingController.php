<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Spending;
use App\Investment;
use Auth;
class SpendingController extends Controller
{

    public function update(Request $request)
    {
        // 支出配分を更新する
        $this->validate($request, Spending::$rules);
        $spending = Spending::find(Auth::user()->id);
        $form = $request->all();
        unset($form['_token']);
        $spending->fill($form)->save();

        // 貯蓄・投資配分を更新する
        $investment = Investment::find(Auth::user()->id);
        $investment->total_amount = $request->storeinvest_saving + $request->storeinvest_investment + $request->storeinvest_other;
        $investment->save();

        // フラッシュメッセージの表示内容を設定する
        $notification = array (
            'message' => '支出配分を保存しました。',
            'alert-type' => 'success'
        );

        return redirect()->to('home')->with($notification);
    }

    public function index()
    {
        $user = Auth::user();
        $spendings = Spending::where('user_id',$user->id)->first();
        return view('/home',compact('spendings'));
    }
}
