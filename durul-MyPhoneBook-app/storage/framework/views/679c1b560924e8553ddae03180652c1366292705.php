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
                    <form action="<?php echo e(route('create_collab')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="text" class="form-control" placeholder="...">
                            <button type="submit" class="btn btn-primary">Recherche</button>
                    </form>   
                    <form action="<?php echo e(route('create_collab')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <br>
                            <button type="submit" class="btn btn-primary">Create</button>
                    </form>

                    <br>
                      <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Numéro Téléphone</th>
                                    <th>Email</th>
                                    <th>Entreprise</th>
                                    <th>Numéro Entreprise</th>
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
                                    <td><?php echo e($data->numero_telephone_ent); ?></td>
                                    <td>
                                        <form action="<?php echo e(route('update_collab')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </form>
                                        <form action="<?php echo e(route('delete_collab')); ?>" method="delete">
                                            <?php echo csrf_field(); ?>
                            <br>
                                            <button type="submit" class="btn btn-primary">Delete</button>
                                        </form>     
                                    </td>
                                    
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                      </div>
 
                    <?php echo e($y->links('pagination::bootstrap-4')); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ahmet-mac/etna-web/group-930377/durul-MyPhoneBook-app/resources/views/collaborateur/collaborateur.blade.php ENDPATH**/ ?>