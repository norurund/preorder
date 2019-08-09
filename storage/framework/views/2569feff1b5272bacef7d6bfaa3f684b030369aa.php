<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col col-md-4">
        <nav class="panel panel-default">
          <div class="panel-heading">ステータス</div>
          <div class="panel-body">
            <h2>予約総数：<?php echo e($num); ?> </h2>
          </div>
        </nav>
      </div>
      <div class="column col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">予約一覧</div>
          <div class="panel-body">
            <div class="text-right">
              <a href="<?php echo e(route('admin.export')); ?>" method="GET" class="btn btn-default btn-block">
                CSV出力
              </a>
            </div>
          </div>
          <table class="table">
            <thead>
            <tr>
              <th>予約者氏名</th>
              <th>日程</th>
              <th>会</th>
              <th>紹介者氏名</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $odr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($odr->ordername); ?></td>
                <td><?php echo e($odr->date); ?></td>
                <td><?php echo e($odr->kai); ?></td>
                <td><?php echo e($odr->name); ?></td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\preodr\resources\views/admin/ref.blade.php ENDPATH**/ ?>