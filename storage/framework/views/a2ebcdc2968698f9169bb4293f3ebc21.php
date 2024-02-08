<?php $__env->startSection('content'); ?>
<section id="wsus__dashboard">
    <div class="container-fluid">
      <?php echo $__env->make('frontend.dashboard.layouts.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="row">
        <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
          <div class="dashboard_content">
            <h3><i class="fal fa-gift-card"></i> address</h3>
            <div class="wsus__dashboard_add">
              <div class="row">
                <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-6">
                  <div class="wsus__dash_add_single">
                    <h4>Billing Address</h4>
                    <ul>
                      <li><span>name :</span> <?php echo e($address->name); ?></li>
                      <li><span>Phone :</span> <?php echo e($address->phone); ?></li>
                      <li><span>email :</span> <?php echo e($address->email); ?></li>
                      <li><span>country :</span> <?php echo e($address->country); ?></li>
                      <li><span>state :</span> <?php echo e($address->state); ?></li>
                      <li><span>city :</span> <?php echo e($address->city); ?></li>
                      <li><span>zip code :</span> <?php echo e($address->zip); ?></li>
                      <li><span>address :</span> <?php echo e($address->address); ?></li>
                    </ul>
                    <div class="wsus__address_btn">
                      <a href="<?php echo e(route('user.address.edit', $address->id)); ?>" class="edit"><i class="fal fa-edit"></i> edit</a>
                      <a href="<?php echo e(route('user.address.destroy', $address->id)); ?>" class="del delete-item"><i class="fal fa-trash-alt"></i> delete</a>
                    </div>
                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12">
                  <a href="<?php echo e(route('user.address.create')); ?>" class="add_address_btn common_btn"><i class="far fa-plus"></i>
                    add new address</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\stojk\laravel\wordsnpages\resources\views/frontend/dashboard/address/index.blade.php ENDPATH**/ ?>