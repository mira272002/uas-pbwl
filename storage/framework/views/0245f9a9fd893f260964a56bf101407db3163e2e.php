

<?php $__env->startSection('content'); ?>
<div class="container w-50">
    <div class="card p-5" style="background-color: #39ac39;">
        <form method="post" action="<?php echo e(url('durians/store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Jenis Durian</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Jenis Durian" name="jenis_durian" value="<?php echo e(old('jenis_durian')); ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Harga</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Rp." name="harga_durian" value="<?php echo e(old('harga_durian')); ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Keterangan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Keterangan" name="ket_durian" value="<?php echo e(old('ket_durian')); ?>" required>
                </div>
            </div>
            <button type="submit" class="btn btn-light">Tambah</button>
        </form>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_mira\resources\views/durians/create.blade.php ENDPATH**/ ?>