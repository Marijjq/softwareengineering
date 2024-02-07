

<?php $__env->startSection('content'); ?>

<section id="wsus__dashboard">
    <div class="container-fluid">
      <?php echo $__env->make('frontend.dashboard.layouts.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <?php echo $__env->make('frontend.dashboard.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\stojk\laravel\wordsnpages\resources\views/frontend/dashboard/dashboard.blade.php ENDPATH**/ ?>