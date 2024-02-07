<div class="container mt-5">
    <h2>Featured Authors</h2>
    <div class="row grid" style="position: relative; height: auto;">
        <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-4" style="position: relative;">
                <a class="wsus__hot_deals__single" href="<?php echo e(route('authorDetails', ['author' => $author->authorId])); ?>">
                    <div class="wsus__hot_deals__single_img">
                        <img src="<?php echo e(asset($author->image)); ?>" alt="book" class="img-fluid w-100" oncontextmenu="return false;">
                    </div>
                    <div class="wsus__hot_deals__single_text">
                        <h2><?php echo e($author->name . ' ' . $author->surname); ?></h2>
                    </div>
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH C:\Users\stojk\laravel\wordsnpages\resources\views/frontend/home/sections/featured-authors.blade.php ENDPATH**/ ?>