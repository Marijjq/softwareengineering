

<?php $__env->startSection('content'); ?>

<section id="wsus__cart_view">
    <div class="container">
        <div class="row">
            <div class="col-xl-9">
                <div class="wsus__cart_list">
                    <div class="table-responsive">
                        <table>
                            <tbody>
                                <tr class="d-flex">
                                    <th class="wsus__pro_img">
                                        Product Item
                                    </th>
                                    <th class="wsus__pro_name">
                                        Product Details
                                    </th>
                                    <th class="wsus__pro_select" style="width: 330px;">
                                        Quantity
                                    </th>
                                    
                                    <th class="wsus__pro_tk">
                                        Price
                                    </th>
                                    <th class="wsus__pro_icon">
                                        Clear Cart
                                    </th>
                                </tr>
                                <?php
                                $subtotal = 0;
                                $taxRate = 0.15; // 15%
                                $tax = 0;
                                ?>
                                <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="d-flex">
                                        <td class="wsus__pro_img">
                                            <img src="<?php echo e(optional($cartItem->book)->image); ?>" alt="<?php echo e($cartItem->book->name); ?>" class="img-fluid w-100">
                                        </td>
                                        <td class="wsus__pro_name">
                                            <p><strong>Title:</strong> <?php echo e($cartItem->book->name); ?></p>
                                            <p><strong>Author:</strong> <?php echo e(optional($cartItem->book->author)->name . ' ' . optional($cartItem->book->author)->surname); ?></p>
                                            <p><strong>Category:</strong> <?php echo e(optional($cartItem->book->category)->name); ?></p>
                                        </td>
                                        <td class="wsus__pro_select" style="width: 330px;">
                                            <div class="input-group quantity-input" style="width: 100%;">
                                                <a href="<?php echo e(route('qty-decrement', ['rowId' => $cartItem->id])); ?>" class="btn btn-outline-info" type="button">-</a>
                                                <input type="number" value="<?php echo e($cartItem->quantity); ?>" name="quantity[]" class="form-control form-control-sm" style="width: 50px; text-align: center;">
                                                <a href="<?php echo e(route('qty-increment', ['rowId' => $cartItem->id])); ?>" class="btn btn-outline-info" type="button">+</a>
                                            </div>
                                        </td>
                                        
                                        <td class="wsus__pro_tk">
                                            <?php
                                            // Calculate the price for the current item
                                            $price = $cartItem->quantity * $cartItem->book->init_price;
                                            // Add to subtotal
                                            $subtotal += $price;
                                            // Calculate tax for the current item
                                            $tax += $price * $taxRate;
                                            ?>
                                            <h6>$<?php echo e(number_format($price, 2)); ?></h6>
                                        </td>
                                        <td class="wsus__pro_icon">
                                            <a href="<?php echo e(route('remove-book', $cartItem->id)); ?>"><i class="far fa-times" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-3" style="position: relative;">
                <div class="wsus__cart_list_footer_button" id="sticky_sidebar" style="will-change: transform; transform: translateZ(0px);">
                    <h6>Total Cart</h6>
                    <p>Subtotal $<?php echo e(number_format($subtotal, 2)); ?></p>
                    <p>Tax $<?php echo e(number_format($tax, 2)); ?> (15%)</p>
                    <p>Total: $<?php echo e(number_format($subtotal + $tax, 2)); ?></p>
                </div>
                <a class="common_btn mt-4 w-100 text-center" href="<?php echo e(route('user.checkout')); ?>">Checkout</a>
                <a class="common_btn mt-1 w-100 text-center" href="<?php echo e(route('shop')); ?>"><i class="fab fa-shopify" aria-hidden="true"></i> Go Shop</a>
            </div>
            <div id="sticky_sidebar" class="wsus__cart_list_footer_button jquery-stickit-spacer" style="height: 438.4px; visibility: hidden !important; display: none !important;"></div>
        </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\stojk\laravel\wordsnpages\resources\views/frontend/pages/cart.blade.php ENDPATH**/ ?>