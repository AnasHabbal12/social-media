<?php $__env->startSection('content'); ?>
    <div class="container"> 
        <div class="row">
            <div class="col-8">
                <img src="/storage/<?php echo e($post->image); ?>" alt="" class="w-100">
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pr-3">
                            <img src="/storage/<?php echo e($post->user->profile->profileImage()); ?>" alt="" class="w-100 rounded-circle" style="max-width: 40px;">
                        </div>
                        <div>
                            <div class="font-weight-bold"><a href="/profile/<?php echo e($post->user->id); ?>"><span class="text-dark"><?php echo e($post->user->username); ?></span></a>
                            <a href="#" class="pl-3"> Follow</a></div>
                        </div>
                    </div>
                    <hr>
                    <p><a href="/profile/<?php echo e($post->user->id); ?>"><span class="text-dark font-weight-bold"><?php echo e($post->user->username); ?></span></a> <?php echo e($post->caption); ?></p>
                </div>
                
            </div>
        </div>
        
        
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/posts/show.blade.php ENDPATH**/ ?>