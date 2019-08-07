@extends('layout')

@section('styles')
  @include('share.flatpickr.styles')
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <nav class="panel panel-default">
          <div class="panel-heading">コメント</div>
          <div class="panel-body">
            @if($errors->any())
              <div class="alert alert-danger">
                @foreach($errors->all() as $message)
                  <p>{{ $message }}</p>
                @endforeach
              </div>
            @endif
            <form action="{{ route('order.create') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="ordername">名前</label>
                <input type="text" class="form-control" name="ordername" id="ordername" value="sample" />
              </div>
              <div class="form-group">
                <label for="date">日付</label>
                <input type="text" class="form-control" name="date" id="date" value="sample" />
              </div>
              <div class="form-group">
                <label for="kai">会</label>
                <input type="text" class="form-control" name="kai" id="kai" value="sample" />
              </div>
              <div class="form-group">
                <label for="name">紹介者氏名</label>
                <input type="text" class="form-control" name="name" id="name" value="sample" />
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-primary">送信</button>
              </div>
            </form>
          </div>
        </nav>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  @include('share.flatpickr.scripts')
@endsection
