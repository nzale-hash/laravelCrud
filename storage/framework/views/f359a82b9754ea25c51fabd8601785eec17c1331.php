<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail Siswa</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Nama Siswa : </strong> <?php echo e($biodata->namaSiswa); ?>

        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Alamat Siswa : </strong> <?php echo e($biodata->alamatSiswa); ?>

        </div>
      </div>
      <div class="col-md-12">
        <a href="<?php echo e(route('biodata.index')); ?>" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nzale/lrv/resources/views/biodata/detail.blade.php ENDPATH**/ ?>