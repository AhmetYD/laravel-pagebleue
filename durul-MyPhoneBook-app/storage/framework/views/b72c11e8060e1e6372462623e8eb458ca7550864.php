<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Update collaborateur')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <form action="/collaborateur/update" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($data['id']); ?>">
                        <input type="text" name="nom_collab" value="<?php echo e($data['nom_collab']); ?>"> <br> <br>
                        <input type="text" name="prenom_collab" value="<?php echo e($data['prenom_collab']); ?>"> <br> <br>
                        <input type="text" name="numero_telephone_collab" value="<?php echo e($data['numero_telephone_collab']); ?>"> <br> <br>
                        <input type="text" name="email_collab" value="<?php echo e($data['email_collab']); ?>"> <br> <br>
                        <input type="text" name="entreprise_collab" value="<?php echo e($data['entreprise_collab']); ?>"> <br> <br>
                        <button type="submit">Update</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ahmet-mac/etna-web/dossier/group-930377/durul-MyPhoneBook-app/resources/views/collaborateur/update_collab.blade.php ENDPATH**/ ?>