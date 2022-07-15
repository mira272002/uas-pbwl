

<?php $__env->startSection('content'); ?>
<div class="container w-50">
    <div class="card p-5" style="background-color:#39ac39;">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cust): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form method="post" action="<?php echo e(url('customers/update')); ?>/<?php echo e($cust->id_cust); ?>">
            <?php echo csrf_field(); ?>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nama Customers</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Nama Customers" name="nama_cust" value="<?php echo e($cust->nama_cust); ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Jenis Durian</label>
                <div class="col-sm-8">
                    <select name="durian_cust" class="form-select">
                        <option value="<?php echo e($cust->durian_cust); ?>"><?php echo e($cust->jenis_durian); ?></option>
                        <?php $__currentLoopData = $durians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $durian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($durian->id_durian); ?>"><?php echo e($durian->jenis_durian); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Kuantiti</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Kuantiti" name="pesanan_cust" value="<?php echo e($cust->pesanan_cust); ?>" required>
                </div>
            </div>
            <button type="submit" class="btn btn-light">Simpan</button>
        </form>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_mira\resources\views/customers/edit.blade.php ENDPATH**/ ?>