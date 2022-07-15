<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11 text-center">
            <div class="card justify-content-center">
                <div class="card-body">
                    <img class="m-2" src="<?php echo e(asset('img/1.jpeg')); ?>" width="300px" height="200px" style="border-radius:40px;">
                    <img class="m-2" src="<?php echo e(asset('img/2.jpg')); ?>" width="300px" height="200px" style="border-radius:40px;">
                    <img class="m-2" src="<?php echo e(asset('img/3.jpg')); ?>" width="300px" height="200px" style="border-radius:40px;">
                    <img class="m-2" src="<?php echo e(asset('img/4.jpg')); ?>" width="300px" height="200px" style="border-radius:40px;">
                    <img class="m-2" src="<?php echo e(asset('img/5.jpg')); ?>" width="300px" height="200px" style="border-radius:40px;">

                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_mira\resources\views/welcome.blade.php ENDPATH**/ ?>