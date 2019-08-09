<?php $__env->startSection('content'); ?>
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
          <td><?php echo e($order->ordername); ?></td>
          <td><?php echo e($order->date); ?></td>
          <td><?php echo e($order->kai); ?></td>
          <td><?php echo e($order->name); ?></td>
        </tr>

</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\preodr\resources\views/order/thankyou.blade.php ENDPATH**/ ?>