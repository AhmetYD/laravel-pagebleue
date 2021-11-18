<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('Création entreprise')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="row justify-content-center">
                    <form action="/entreprise/create" method="POST">
                        <?php echo csrf_field(); ?>
                        
                        <input type="text" name="nom_ent" placeholder="Entrer un nom"> <br> <br>
                        <input type="text" name="rue_ent" placeholder="Entrer une rue"> <br> <br>
                        <input type="text" name="code_postal_ent" placeholder="Entrer un code postal"> <br> <br>
                        <input type="text" name="ville_ent" placeholder="Entrer une ville"> <br> <br>
                        <input type="text" name="numero_telephone_ent" placeholder="Entrer un numéro de telephone"> <br> <br>
                        <input type="text" name="email_ent" placeholder="Entrer un email"> <br> <br>
                        <button type="submit">Ajouter</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ahmet-mac/Desktop/laravel-app/laravel-pagebleue/durul-MyPhoneBook-app/resources/views/entreprise/create_ent.blade.php ENDPATH**/ ?>