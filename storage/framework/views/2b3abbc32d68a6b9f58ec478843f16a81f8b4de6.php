

<?php $__env->startSection('content'); ?>
<div class="container">
    <a href="<?php echo e(url('/customers/create')); ?>" class="btn btn-warning float-end mb-3">Tambah Customers</a>
    <table class="table">
        <thead class="table table-success">
            <tr class="text-center">
                <th>ID</th>
                <th>Nama Customers</th>
                <th>Jenis Durian</th>
                <th>Kuantiti</th>
                <th>Total</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody class="align-middle">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="text-center">
                <td><?php echo e($customer->id_cust); ?></td>
                <td><?php echo e($customer->nama_cust); ?></td>
                <td><?php echo e($customer->jenis_durian); ?></td>
                <td><?php echo e($customer->pesanan_cust); ?></td>
                <td>Rp. <?php echo e($customer->pesanan_cust * $customer->harga_durian); ?></td>
                <td width="100px"><a href="<?php echo e(url('customers/edit')); ?>/<?php echo e($customer->id_cust); ?>" class="btn btn-primary">Edit</a></td>
                <td width="100px"><a href="<?php echo e(url('customers/destroy')); ?>/<?php echo e($customer->id_cust); ?>" class="btn btn-danger" onclick="return confirm('Ingin Menghapus Customer Ini ?');">Hapus</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_mira\resources\views/customers/index.blade.php ENDPATH**/ ?>