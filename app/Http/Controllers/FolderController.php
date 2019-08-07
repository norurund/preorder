<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class FolderController extends Controller
{
    public function ordersform()
    {
        return view('order/create');
    }

    public function create(Request $request)
    {
    // フォルダモデルのインスタンスを作成する
    $order = new Order();
    // タイトルに入力値を代入する
    $order->ordername = $request->ordername;
    $order->date = $request->date;
    $order->kai = $request->kai;
    $order->name = $request->name;
    // インスタンスの状態をデータベースに書き込む
    $order->save();
    //トップページにリダイレクト
    return redirect()->route('order.create');
}
}