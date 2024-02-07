<section id="wsus__banner">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="wsus__banner_content">
                    <div class="row banner_slider">
                        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xl-12">
                                <div class="wsus__single_slider" style="background: url(<?php echo e($slider->banner); ?>);">
                                    <div class="wsus__single_slider_text">
                                        <h3><?php echo $slider->type; ?></h3>
                                        <h1><?php echo $slider->title; ?></h1>
                                        <h6>start at $ <?php echo e($slider->starting_price); ?></h6>
                                        <a class="common_btn" href="<?php echo e($slider->btn_url); ?>">shop now</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\stojk\laravel\wordsnpages\resources\views/frontend/home/sections/banner-slider.blade.php ENDPATH**/ ?>