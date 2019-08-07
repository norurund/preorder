<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>予約入力画面</title>
  <?php echo $__env->yieldContent('styles'); ?>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<header>
  <nav class="my-navbar">
    <a class="my-navbar-brand" href="/">予約入力画面</a>
    <div class="my-navbar-control">
    <?php if(Auth::check()): ?>
        <span class="my-navbar-item">ようこそ, <?php echo e(Auth::user()->name); ?>さん</span>
        ｜
        <a href="#" id="logout" class="my-navbar-item">ログアウト</a>
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
          <?php echo csrf_field(); ?>
        </form>
      <?php else: ?>
        <a class="my-navbar-item" href="<?php echo e(route('login')); ?>">管理者の方はこちらから</a>
      <?php endif; ?>
    </div>
  </nav>
</header>
<main>
  <?php echo $__env->yieldContent('content'); ?>
</main>
  <script>
    document.getElementById('logout').addEventListener('click', function(event) {
      event.preventDefault();
      document.getElementById('logout-form').submit();
    });
  </script>
<?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\preodr\resources\views/layout.blade.php ENDPATH**/ ?>