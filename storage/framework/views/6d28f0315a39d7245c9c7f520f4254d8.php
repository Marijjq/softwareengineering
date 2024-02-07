<!-- frontend.home.home.blade.php -->


<div class="container mt-5">
    <h2>Featured Books</h2>
    <div class="row grid" style="position: relative; height: auto;">
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-4" style="position: relative;">
                <div class="wsus__hot_deals__single">
                    <div class="wsus__hot_deals__single_img">
                        <img src="<?php echo e(asset($book->image)); ?>" alt="book" class="img-fluid w-100" oncontextmenu="return false;">
                    </div>
                    <div class="wsus__hot_deals__single_text">
                        <h3><?php echo e($book->title); ?></h3>
                        <p>written by: <?php echo e($book->author->name . ' ' . $book->author->surname); ?></p>
                        <p>Status: <?php echo e($book->status); ?></p>
                        <div>
                            <a href="<?php echo e(route('books.book-detail', $book->ISBN)); ?>" class="btn btn-primary">See Details</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div><?php /**PATH C:\Users\stojk\laravel\wordsnpages\resources\views/frontend/home/sections/featured-books.blade.php ENDPATH**/ ?>