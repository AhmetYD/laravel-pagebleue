<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Entreprise')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <?php echo e(__('You are logged in!')); ?>


                    <form action="<?php echo e(route('create_ent')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <br>
                            <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                    <form action="<?php echo e(route('update_ent')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <br>
                            <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                    <form action="<?php echo e(route('delete_ent')); ?>" method="delete">
                            <?php echo csrf_field(); ?>
                            <br>
                            <button type="submit" class="btn btn-primary">Delete</button>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ahmet-mac/etna-web/group-930377/durul-MyPhoneBook-app/resources/views/entreprise.blade.php ENDPATH**/ ?>