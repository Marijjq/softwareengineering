

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="text-center mt-5">
                    <img src="<?php echo e(asset('frontend/images/success-icon-10-300x300.png')); ?>" alt="Success" style="width: 200px;">
                    <h2 class="mt-3">Payment Successful!</h2>

                    <p>Your order has been successfully processed.</p>
                    
                    <p>Thank you for shopping with us.</p>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\stojk\laravel\wordsnpages\resources\views/frontend/pages/payment-success.blade.php ENDPATH**/ ?>