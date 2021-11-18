<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Update entreprise')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <form action="/entreprise/update" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($data['id']); ?>">
                        <input type="text" name="nom_ent" value="<?php echo e($data['nom_ent']); ?>"> <br> <br>
                        <input type="text" name="rue_ent" value="<?php echo e($data['rue_ent']); ?>"> <br> <br>
                        <input type="text" name="code_postal_ent" value="<?php echo e($data['code_postal_ent']); ?>"> <br> <br>
                        <input type="text" name="ville_ent" value="<?php echo e($data['ville_ent']); ?>"> <br> <br>
                        <input type="text" name="numero_telephone_ent" value="<?php echo e($data['numero_telephone_ent']); ?>"> <br> <br>
                        <input type="text" name="email_ent" value="<?php echo e($data['email_ent']); ?>"> <br> <br>
                        <button type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ahmet-mac/etna-web/dossier/group-930377/durul-MyPhoneBook-app/resources/views/entreprise/update_ent.blade.php ENDPATH**/ ?>