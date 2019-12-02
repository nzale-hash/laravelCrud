<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit Biodata Siswa</h3>
      </div>
    </div>

    <?php if($errors->any()): ?>
      <div class="alert alert-danger">
        <strong>Whoops! </strong> there where some problems with your input.<br>
        <ul>
          <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    <?php endif; ?>

    <form action="<?php echo e(route('biodata.update',$biodata->id)); ?>" method="post">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?>
      <div class="row">
        <div class="col-md-12">
          <strong>Nama Siswa :</strong>
          <input type="text" name="namaSiswa" class="form-control" value="<?php echo e($biodata->namaSiswa); ?>">
        </div>
        <div class="col-md-12">
          <strong>Alamat Siswa :</strong>
          <textarea class="form-control" name="alamatSiswa" rows="8" cols="80"><?php echo e($biodata->alamatSiswa); ?></textarea>
        </div>

        <div class="col-md-12">
          <a href="<?php echo e(route('biodata.index')); ?>" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/nzale/lrv/resources/views/biodata/edit.blade.php ENDPATH**/ ?>