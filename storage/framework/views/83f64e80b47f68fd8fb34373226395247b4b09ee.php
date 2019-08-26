<?php $__env->startSection('styles'); ?>
  <?php echo $__env->make('share.flatpickr.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <nav class="panel panel-default">
          <div class="panel-heading">情報入力</div>
          <div class="panel-body">
            <?php if($errors->any()): ?>
              <div class="alert alert-danger">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <p><?php echo e($message); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            <?php endif; ?>
      <form action="<?php echo e(route('order.create', ['id' => $order->id])); ?>" method="POST">
              <?php echo csrf_field(); ?>
              <div class="form-group">
                <label for="ordername">予約者氏名</label>
                <input type="text" class="form-control" name="ordername" id="ordername" value="<?php echo e(old('ordername')); ?>"/>
              </div>
              <div class="form-group">
              <label for="kai">会</label>
              <select input type="select" class="form-control" name="kai" id="kai" value="<?php echo e(old('kai')); ?>">
                  <option></option>
                  <option>1st theater(yyyymmddhhmmss)</option>
                  <option>2nd theater(yyyymmddhhmmss)</option>
                  <option>3rd theater(yyyymmddhhmmss)</option>
                  <option>4th theater(yyyymmddhhmmss)</option>
                  <option>5th theater(yyyymmddhhmmss)</option>
                </select>
              </div>
              <div class="form-row align-items-center col-1">
                <label for="name">チケット(大人)</label>
                <select input type="select" class="form-control" name="tiketadl" id="tiketadl" value="<?php echo e(old('tiketadl')); ?>">
                  <option></option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                </select>
                <label for="name">チケット(子供)</label>
                <select input type="select" class="form-control" name="tiketcld" id="tiketcld" value="<?php echo e(old('tiketcld')); ?>">
                  <option></option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                </select>
                 <div class="input-group mb-1">
                  <label for="name">合計枚数</label>
                  <select input type="select" class="form-control" name="tiketsum" id="tiketsum" value="<?php echo e(old('tiketsum')); ?>">
                  <option></option>
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                </select>
                 </div>
              </div>
              <div class="form-group">
                <label for="name">メールアドレス(半角)</label>
                <input type="text" class="form-control" name="address" id="address" value="<?php echo e(old('address')); ?>"/>
              </div>
              <div class="form-group">
                <label for="name">紹介者氏名</label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo e(old('name')); ?>"/>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
  <?php echo $__env->make('share.flatpickr.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\preodr\resources\views/order/create.blade.php ENDPATH**/ ?>