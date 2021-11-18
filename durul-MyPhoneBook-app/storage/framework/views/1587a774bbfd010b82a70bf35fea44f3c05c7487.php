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
                    <form method="post" action="{{}}">
                        <label class="control-label">Nom d'entreprise :<input type="text" class="form-control" name="nom_ent" placeholder="..."></label>
                        
                        <fieldset >
                            <legend style="font-size:17px"><b>Adresse</b></legend>
                            <label class="control-label">Rue :<input type="text" class="form-control" name="rue_ent" placeholder="..."></label><br>
                            <label class="control-label">Ville :<input type="text" class="form-control" name="ville_ent" placeholder="..."></label><br>
                            <label class="control-label">Code Postal :<input type="text" class="form-control" name="code_postal_ent" placeholder="..."></label>
                        </fieldset>

                        <fieldset>
                            <legend style="font-size:17px"><b>Informations complémentaire</b></legend> 
                            <label class="control-label">Numéro de téléphone :<input type="text" class="form-control" name="numero_telephone_ent" placeholder="..."></label><br>
                            <label class="control-label">Email :<input type="email" class="form-control" name="email_ent" placeholder="..."></label>
                        </fieldset>
                        <br>
                        <input type="submit" value="Créer !" class="btn btn-primary">
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ahmet-mac/etna-web/group-930377/durul-MyPhoneBook-app/resources/views/entreprise/create_ent.blade.php ENDPATH**/ ?>