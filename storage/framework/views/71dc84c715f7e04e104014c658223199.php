

<?php $__env->startSection('title'); ?>
    Checkout 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!--============================
        BREADCRUMB START
    
        BREADCRUMB END
    ==============================-->

    <!--============================
        CHECK OUT PAGE START
    ==============================-->
    <section id="wsus__cart_view">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="wsus__check_form">
                        <div class="d-flex">
                                <h5>Shipping Details </h5>                            
                        </div>
                        <div class="wsus__check_form mt-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wsus__check_single_form">
                                            <input type="text" placeholder="Name" name="name" value="<?php echo e(old('name', $userAddress ? $userAddress->name : '')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wsus__check_single_form">
                                            <input type="text" placeholder="Phone *" name="phone" value="<?php echo e(old('phone', $userAddress ? $userAddress->phone : '')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wsus__check_single_form">
                                            <input type="email" placeholder="Email *" name="email" value="<?php echo e(old('email', $userAddress ? $userAddress->email : '')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wsus__check_single_form">
                                            <input type="text" placeholder="Country *" name="country" value="<?php echo e(old('country', $userAddress ? $userAddress->country : '')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wsus__check_single_form">
                                            <input type="text" placeholder="State" name="state" value="<?php echo e(old('state', $userAddress ? $userAddress->state : '')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wsus__check_single_form">
                                            <input type="text" placeholder="Town / City *" name="city" value="<?php echo e(old('city', $userAddress ? $userAddress->city : '')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wsus__check_single_form">
                                            <input type="text" placeholder="Zip *" name="zip" value="<?php echo e(old('zip', $userAddress ? $userAddress->zip : '')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wsus__check_single_form">
                                            <input type="text" placeholder="Address *" name="address" value="<?php echo e(old('address', $userAddress ? $userAddress->address : '')); ?>">
                                        </div>
                                    </div>
                                   
                                </div>                        
                            </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5">
                    <div class="wsus__order_details" id="sticky_sidebar">
                        <!-- Order Summary -->
                        <div class="wsus__order_details_summery">
                            <h6>Order Summary</h6>
                            <p>Subtotal: <span>$<?php echo e(number_format($subtotal, 2)); ?></span></p>
                            <p>Delivery: <span>$<?php echo e(number_format($tax, 2)); ?></span></p>
                            <p><b>Total:</b> <span>$<?php echo e(number_format($total, 2)); ?></span></p>
                            <!-- Checkout Form -->
                            <form action="<?php echo e(route('stripe.payment')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <!-- Include hidden input field for total price -->
                                <input type="hidden" name="total" value="<?php echo e($total); ?>">
                                <!-- Other form fields -->
                                <button type="submit" class="common_btn">Place Order</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\stojk\laravel\wordsnpages\resources\views/frontend/pages/checkout.blade.php ENDPATH**/ ?>