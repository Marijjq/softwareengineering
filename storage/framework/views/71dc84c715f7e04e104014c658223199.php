

<?php $__env->startSection('title'); ?>
    <!-- Add your title here if needed -->
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
                            <form action="<?php echo e(route('user.checkout.address.create')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wsus__check_single_form">
                                            <input type="text" placeholder="Name" name="name" value="<?php echo e(old('name')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wsus__check_single_form">
                                            <input type="text" placeholder="Phone *" name="phone" value="<?php echo e(old('phone')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wsus__check_single_form">
                                            <input type="email" placeholder="Email *" name="email" value="<?php echo e(old('email')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wsus__check_single_form">
                                            <input type="text" placeholder="Country *" name="country" value="<?php echo e(old('country')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wsus__check_single_form">
                                            <input type="text" placeholder="State" name="state" value="<?php echo e(old('state')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wsus__check_single_form">
                                            <input type="text" placeholder="Town / City *" name="city" value="<?php echo e(old('city')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wsus__check_single_form">
                                            <input type="text" placeholder="Zip *" name="zip" value="<?php echo e(old('zip')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wsus__check_single_form">
                                            <input type="text" placeholder="Address *" name="address" value="<?php echo e(old('address')); ?>">
                                        </div>
                                    </div>
                                   
                                </div>
                            </form>
                        </div>
                                      
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5">
                    <div class="wsus__order_details" id="sticky_sidebar">
                        <!-- Order Summary -->
                        <div class="wsus__order_details_summery">
                            <h6>Order Summary</h6>
                            <p>Subtotal: <span>$<?php echo e(Cart::subtotal()); ?></span></p>
                            <p>Delivery: <span>$<?php echo e(Cart::tax()); ?></span></p>
                            <p><b>Total:</b> <span>$<?php echo e(Cart::subtotal() + Cart::tax()); ?></span></p>


                            <!-- Checkout Form -->
                            <form action="" method="POST" id="CheckoutForm">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="shipping_address_id" value="" id="inputShippingAddressId">
                            </form>

                            <!-- Place Order Button -->
                            <a href="" id="submitCheckoutForm" class="common_btn">Place Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\stojk\laravel\wordsnpages\resources\views/frontend/pages/checkout.blade.php ENDPATH**/ ?>