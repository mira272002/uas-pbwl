

<?php $__env->startSection('content'); ?>
<div class="container">
    <a href="<?php echo e(url('/durians/create')); ?>" class="btn btn-warning float-end mb-3">Tambah Durian</a>
    <table class="table">
        <thead class="table table-success">
            <tr class="text-center">
                <th>ID</th>
                <th>Jenis Durian</th>
                <th>Harga</th>
                <th>Keterangan</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $durian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="text-center">
                <td><?php echo e($durian->id_durian); ?></td>
                <td><?php echo e($durian->jenis_durian); ?></td>
                <td>Rp. <?php echo e($durian->harga_durian); ?></td>
                <td><?php echo e($durian->ket_durian); ?></td>
                <td width="100px"><a href="<?php echo e(url('durians/edit')); ?>/<?php echo e($durian->id_durian); ?>" class="btn btn-primary">Edit</a></td>
                <td width="100px"><a href="<?php echo e(url('durians/destroy')); ?>/<?php echo e($durian->id_durian); ?>" class="btn btn-danger" onclick="return confirm('Ingin Menghapus Durian Ini ?');">Hapus</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_mira\resources\views/durians/index.blade.php ENDPATH**/ ?>