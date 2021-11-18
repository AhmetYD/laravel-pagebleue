<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('Home')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('You are logged in!')); ?>

                    
                    <div class="home-button">
                        <br>
                        <form action="<?php echo e(route('entreprise')); ?>" method="get">
                            <button type="submit" class="btn btn-primary">Entreprise</button>
                        </form><br>
                        <form action="<?php echo e(route('collaborateur')); ?>" method="get">
                            <button type="submit" class="btn btn-primary">Collaborateur</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ahmet-mac/Desktop/laravel-app/laravel-pagebleue/durul-MyPhoneBook-app/resources/views/home.blade.php ENDPATH**/ ?>