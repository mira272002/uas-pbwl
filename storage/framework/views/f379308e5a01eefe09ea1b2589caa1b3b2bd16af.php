<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <link rel="shortcut icon" href="<?php echo e(asset('icons/favicon.png')); ?>" type="image/x-icon">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #39ac39;">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <img src="<?php echo e(asset('icons/favicon.png')); ?>" width="30"> <?php echo e(config('app.name', 'Laravel')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                        <?php if(Route::has('login')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                        </li>
                        <?php endif; ?>

                        <?php if(Route::has('register')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                        </li>
                        <?php endif; ?>
                        <?php else: ?>
                        <li class="mx-1" style="background-color: white; border-radius: 5px;">
                            <a class="nav-link <?php echo e(Route::is('home') ? 'active' : ''); ?>" href="<?php echo e(url('/home')); ?>"><b>Dashboard</b></a>
                        </li>
                        <li class="mx-1" style="background-color: white; border-radius: 5px;">
                            <a class="nav-link <?php echo e(Route::is('customers') ? 'active' : ''); ?>" href="<?php echo e(url('/customers')); ?>"><b>Data Customers</b></a>
                        </li>
                        <li class="ms-1 me-5" style="background-color: white; border-radius: 5px;">
                            <a class="nav-link <?php echo e(Route::is('durians') ? 'active' : ''); ?>" href="<?php echo e(url('/durians')); ?>"><b>Data Durian</b></a>
                        </li>
                        <li class="nav-item dropdown" style="border-left: 1px black solid;">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Welcome, <?php echo e(Auth::user()->name); ?>

                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        <div class="container">
            <p class="text-muted text-center">Created by &copy; Mira Febriani</p>
        </div>
    </div>
    <script src="<?php echo e(asset('js/bootstrap.bundle.js')); ?>"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\uas_mira\resources\views/layouts/app.blade.php ENDPATH**/ ?>