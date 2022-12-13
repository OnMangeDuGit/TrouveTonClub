<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TrouveTonClub</title>
    <!--url() construit une urle à partir de l'URL courante : public-->
    <link rel="stylesheet" href="<?php echo e(url('css/style.css')); ?>" />
    <?php echo $__env->yieldContent('css'); ?>
</head>
<body>




<main class="section">
    <div class="container">
        <?php echo $__env->yieldContent('contenu'); ?>
    </div>
</main>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\SIO\Laravel\TrouveTonClub\resources\views/template1.blade.php ENDPATH**/ ?>