@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-2">
        <nav class="panel panel-default">
          <div class="panel-heading">ステータス</div>
          <div class="panel-body">
            <h4>予約総数：{{ $num }} </h4>
          </div>
        </nav>
      </div>
      <div class="column col-md-10">
        <div class="panel panel-default">
          <div class="panel-heading">予約一覧</div>
          <div class="panel-body">
            <div class="text-right">
              <a href="{{ route('admin.export') }}" method="GET" class="btn btn-default btn-block">
                CSV出力
              </a>
            </div>
          </div>
          <table class="table">
            <thead>
            <tr>
              <th>予約者氏名</th>
              <th>メールアドレス</th>
              <th>会</th>
              <th>総予約枚数</th>
              <th>大人</th>
              <th>子供</th>
              <th>紹介者氏名</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order as $odr)
              <tr>
                <td>{{ $odr->ordername }}</td>
                <td>{{ $odr->address }}</td>
                <td>{{ mb_substr($odr->kai, 0,3) }}</td>
                <td>{{ $odr->tiketsum }}</td>
                <td>{{ $odr->tiketadl }}</td>
                <td>{{ $odr->tiketcld }}</td>
                <td>{{ $odr->name }}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection