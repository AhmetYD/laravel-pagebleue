<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('Collaborateur')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    
                    <div class="container">
                    
                    <form class="ml-auto" action="<?php echo e(url('/collaborateur/id')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <input type="text" name="search">
                        <input type="submit" value="Search">
                    </form>
                            <br>
                            
                            <a class="ml-auto" href=<?php echo e('/collaborateur/create'); ?>>AJOUT</a>

                    <br>
                      <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Numéro Téléphone</th>
                                    <th>Email</th>
                                    <th>Entreprise</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php $__currentLoopData = $y; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($data->nom_collab); ?></td>
                                    <td><?php echo e($data->prenom_collab); ?></td>
                                    <td><?php echo e($data->numero_telephone_collab); ?></td>
                                    <td><?php echo e($data->email_collab); ?></td>
                                    <td><?php echo e($data->entreprise_collab); ?></td>
                                    <td>
                                        <a href=<?php echo e("delete/".$data['id']); ?>>DELETE</a>
                                        <br>
                                        <a href=<?php echo e("update/".$data['id']); ?>>UPDATE</a>
                                    </td>
                                    
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                            <?php echo e($y->links('pagination::bootstrap-4')); ?>

                      </div>
 
                   
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ahmet-mac/Desktop/laravel-app/laravel-pagebleue/durul-MyPhoneBook-app/resources/views/collaborateur/collaborateur.blade.php ENDPATH**/ ?>