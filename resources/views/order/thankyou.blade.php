@extends('layout')

@section('content')
<div class="panel panel-default">
<table class="table thankyoutable">
    <h3>Thankyou!!以下の内容で予約致しました。</h3>

        <thead>
            <tr>
              <th>予約者氏名</th>
              <th>日程</th>
              <th>会</th>
              <th>紹介者氏名</th>
            </tr>
        </thead>
        <tr>
          <td>{{ $order->ordername }}</td>
          <td>{{ $order->date }}</td>
          <td>{{ $order->kai }}</td>
          <td>{{ $order->name }}</td>
        </tr>

</table>
</div>
@endsection