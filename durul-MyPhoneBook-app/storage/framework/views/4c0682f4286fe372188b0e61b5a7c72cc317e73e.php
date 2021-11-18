<head>
    <title>Entreprise</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('Entreprise')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="container">
                    <form action="<?php echo e(route('create_ent')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="text" class="form-control" placeholder="...">
                            <button type="submit" class="btn btn-primary">Recherche</button>
                    </form>
                    <form action="<?php echo e(route('create_ent')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            
                            <button type="submit" class="btn btn-primary">Create</button>
                    </form>

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Numéro Téléphone</th>
                                <th>Code Postal</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php $__currentLoopData = $x; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($data->nom_ent); ?></td>
                                <td><?php echo e($data->email_ent); ?></td>
                                <td><?php echo e($data->numero_telephone_ent); ?></td>
                                <td><?php echo e($data->code_postal_ent); ?></td>
                                <td>
                                    <form action="<?php echo e(route('update_ent')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                    <form action="<?php echo e(route('delete_ent')); ?>" method="delete">
                                        <?php echo csrf_field(); ?>
                                        
                                        <button type="submit" class="btn btn-primary">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                    <?php echo e($x->links('pagination::bootstrap-4')); ?>


                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ahmet-mac/etna-web/group-930377/durul-MyPhoneBook-app/resources/views/entreprise/entreprise.blade.php ENDPATH**/ ?>