<?php $__env->startSection('styles'); ?>
  <?php echo $__env->make('share.flatpickr.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <nav class="panel panel-default">
          <div class="panel-heading">コメント</div>
          <div class="panel-body">
            <?php if($errors->any()): ?>
              <div class="alert alert-danger">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <p><?php echo e($message); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            <?php endif; ?>
            <form action="<?php echo e(route('order.create')); ?>" method="POST">
              <?php echo csrf_field(); ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
  <?php echo $__env->make('share.flatpickr.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\preodr\resources\views/order/create.blade.php ENDPATH**/ ?>