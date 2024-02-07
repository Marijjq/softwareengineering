

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4">Welcome to Our Shop</h2>
            <p>
                Explore our collection of books. Find your favorite reads and enjoy the best prices.
                We offer fast shipping and secure payment options.
            </p>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 mb-4">
                <a href="<?php echo e(route('books.book-detail', ['book' => $book->ISBN])); ?>" class="card-link">
                    <div class="card" style="height: 600px;">
                        <img src="<?php echo e(asset($book->image)); ?>" class="card-img-top fixed-size-image" alt="<?php echo e($book->title); ?>" style="height: 450px;">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo e($book->title); ?></h4>
                            <p class="card-text">Written by: <?php echo e($book->author->name . ' ' . $book->author->surname); ?></p>
                            <p class="card-text">Price: $<?php echo e($book->init_price); ?></p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h3>Shipping Information</h3>
            <p>
                We offer fast and reliable shipping options. Shipping costs may vary based on your location.
                Please proceed to checkout to get accurate shipping costs.
            </p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <h3>Taxes</h3>
            <p>
                Applicable taxes will be added during the checkout process. The tax amount depends on your
                location and local tax regulations.
            </p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\stojk\laravel\wordsnpages\resources\views/frontend/pages/shop.blade.php ENDPATH**/ ?>