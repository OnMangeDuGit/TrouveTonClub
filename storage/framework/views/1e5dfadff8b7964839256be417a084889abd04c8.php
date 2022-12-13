<?php $__env->startSection('css'); ?>
    <style>
        .card-footer {
            justify-content: center;
            align-items: center;
            padding: 0.4em;
        }
        select, .is-info {
            margin: 0.3em;
        }
        .card-header-title{
            margin-top: 100%;
        }
        .card_info{
            margin-top:100%;
            margin-right: 75%;
        }

    </style>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenu'); ?>
    <?php if(session()->has('info')): ?>
        <div class="notification is-success">
            <?php echo e(session('info')); ?>

        </div>
    <?php endif; ?>



<?php echo $__env->make('template1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SIO\Laravel\TrouveTonClub\resources\views/create.blade.php ENDPATH**/ ?>