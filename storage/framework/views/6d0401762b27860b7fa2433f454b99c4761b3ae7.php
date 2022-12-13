    
    <?php $__env->startSection('contenu'); ?>
        <div class="card">
            <header class="card-header">
                <p class="card-header-title"><strong>Nom de la formation</strong> : <?php echo e($formation->nomformation); ?></p>
            </header>
            <div class="card-content">
                <div class="content">
                    <p>Date de début : <?php echo e($formation->datedebut); ?></p>
                    <hr>
                    <p><?php echo e($formation->duree); ?> <?php echo e($formation->unite); ?> </p>
                     <p>Catégorie : <?php echo e($formation->idcategorie); ?> </p>
                </div>
            </div>
            <footer class="card-footer is-centered">
            <a class="button is-info" href="<?php echo e(route('formation.index')); ?>">Retour à la liste</a>
        </footer>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('template1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SIO\Laravel\projet2\resources\views/show.blade.php ENDPATH**/ ?>