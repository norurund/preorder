<?php $__env->startSection('content'); ?>

<center>
<div class="container-fluid">
<div class="mx-auto" style="width: 800px;">
<h3>Thankyou!!以下の内容で予約致しました。</h3>
<div class="col-6">
<div class="panel panel-default">
<table class="table thankyoutable">

        <thead>
            <tr>
              <th>会</th>
              <th>紹介者氏名</th>
            </tr>
        </thead>
        <tr>
          <td><?php echo e($order->kai); ?></td>
          <td><?php echo e($order->name); ?></td>
        </tr>

</table>
</div>
</div>
</div>
</div>
</center>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\preodr\resources\views/order/thankyou.blade.php ENDPATH**/ ?>