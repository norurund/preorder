<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class AdminController extends Controller
{
    public function showorders()
    {
        // すべてのフォルダを取得する
        $order = Order::all();
        $num = Order::count();
        return view('admin/ref', [
            'order' => $order,
            'num' => $num,
        ]);
    }

    public function export()
  {
    $headers = array(
      "Content-type" => "text/csv",
      "Content-Disposition" => "attachment; filename=file.csv",
      "Pragma" => "no-cache",
      "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
      "Expires" => "0"
    );

    $callback = function() {
      $handle = fopen('php://output', 'w');

      $columns = [
        '予約者氏名',
        '日付',
        '会',
      ] ;
      mb_convert_variables('SJIS-win', 'UTF-8', $columns);

      fputcsv($handle, $columns);

      $order = Order::all();
      foreach ($order as $odr) {
        $csv = [
          $odr->ordername,
          $odr->date,
          $odr->kai,
        ] ;
        mb_convert_variables('SJIS-win', 'UTF-8', $csv);
        fputcsv($handle, $csv);
      }

      fclose($handle);
    };

    return response()->stream($callback, 200, $headers);
 }
}