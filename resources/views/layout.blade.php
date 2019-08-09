<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @if(Auth::check())
    <title>管理画面</title>
  @else
    <title>予約入力画面</title>
  @endif
  @yield('styles')
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<header>
  <nav class="my-navbar">
  @if(Auth::check())
    <a>管理画面</a>
  @else
    <a class="my-navbar-brand" href="/">予約入力画面</a>
  @endif
    <div class="my-navbar-control">
    @if(Auth::check())
        <span class="my-navbar-item">ようこそ {{ Auth::user()->name }}さん</span>
        <a href="/" id="showorder"> 予約入力画面へ</a>
        <a href="/" id="logout" class="my-navbar-item">ログアウト</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      @else
        <a class="my-navbar-item" href="{{ route('login') }}">管理者の方はこちらから</a>
    @endif
    </div>
  </nav>
</header>
<main>
  @yield('content')
</main>
  <script>
    document.getElementById('logout').addEventListener('click', function(event) {
      event.preventDefault();
      document.getElementById('logout-form').submit();
    });
  </script>
@yield('scripts')
</body>
</html>
