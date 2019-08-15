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
      <form action="{{ route('order.create', ['id' => $order->id]) }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="ordername">名前</label>
                <input type="text" class="form-control" name="ordername" id="ordername" />
              </div>
              <div class="form-group">
                <label for="date">日付</label>
                <input type="text" class="form-control" name="date" id="date" />
              </div>
              <div class="form-group">
              <label for="kai">会</label>
              <select input type="select" class="form-control" name="kai" id="kai" >
                  <option>-</option>
                  <option>マチネ</option>
                  <option>ソワレ</option>
                </select>
              </div>
              <div class="form-group">
                <label for="name">紹介者氏名</label>
                <input type="text" class="form-control" name="name" id="name" />
              </div>
              <div class="text-right">
              <button type="submit" class="btn btn-primary">送信</button>
              </div>

       <!-- <div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
            <div class="modal__overlay" tabindex="-1" data-micromodal-close>
              <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
                <header class="modal__header">
                  <h2 class="modal__title" id="modal-1-title">
                    最終確認
                  </h2>
                  <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                </header>
                <main class="modal__content" id="modal-1-content">
                  <p>
                    Try hitting the <code>tab</code> key and notice how the focus stays within the modal itself. Also, <code>esc</code> to close modal.
                  </p>
                </main>
                <footer class="modal__footer">
                  <button type="submit" class="btn btn-primary">送信</button>
      </form>
                  <button class="modal__btn" data-micromodal-close aria-label="Close this dialog window">キャンセル</button>
                </footer>
              </div>
            </div>
        </div> -->

        <!-- 開くボタン -->
        <!-- <button data-micromodal-trigger="modal-1">open</button> -->
        <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
        <script>
          MicroModal.init();
        </script>

          </div>
        </nav>
      </div>
    </div>
  </div>

@endsection

@section('scripts')
  @include('share.flatpickr.scripts')
@endsection
