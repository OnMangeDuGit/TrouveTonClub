<?php $__env->startSection('contenu'); ?>
<div class="card">
    <header class="card-header">
        <p class="card-header-title">Création d'une formation</p>
    </header>
    <div class="card-content">
        <div class="content">
            <form action="<?php echo e(route('formation.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="field">
                    <label class="label">Catégorie</label>
                    <div class="select">
                        <select name="categorie_id">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($categorie->id); ?>"><?php echo e($categorie->nom); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <?php $categorie_id = old('categorie_id') ?>
                <div class="field">
                    <label class="label">Catégorie</label>
                    <div class="select">
                        <select name="categorie_id">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($categorie->id); ?>" <?php echo e(($categorie-
>id==$categorie_id)?'selected ':''); ?>><?php echo e($categorie->nom); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Catégorie</label>
                    <div class="control">
                        <input class="input" type="numeric" name="idcategorie" value="<?php echo e(old('idcategorie')); ?>">
                    </div>
                    <?php $__errorArgs = ['idcategorie'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="help is-danger"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>
                <div class="field">
                    <label class="label">Nom de la formation</label>
                    <div class="control">
                        <textarea class="textarea" name="nomformation" placeholder="Description de la formation"><?php echo e(old('nomformation')); ?></textarea>
                    </div>
                    <?php $__errorArgs = ['nomformation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="help is-danger">Le nom de la formation est incorrect</p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="field">
                    <label class="label">Date de début</label>
                    <div class="control">
                        <input class="input" type="date" name="datedebut" value="<?php echo e(old('datedebut')); ?>">
                    </div>
                    <?php $__errorArgs = ['datedebut'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="help is-danger"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="field">
                    <label class="label">Durée</label>
                    <div class="control">
                        <input class="input" type="numeric" name="duree" value="<?php echo e(old('duree')); ?>">
                    </div>
                    <?php $__errorArgs = ['duree'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="help is-danger"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="field">
                    <label class="label">Unité</label>
                    <div class="control">
                        <input class="input" type="text" name="unite" value="<?php echo e(old('unite')); ?>">
                    </div>
                    <?php $__errorArgs = ['unite'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="help is-danger"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="field">
                    <div class="control">
                        <button class="button is-link">Envoyer</button>

                        <a class="button is-info" href="<?php echo e(route('formation.index')); ?>">Retour à la liste</a>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SIO\Laravel\projet2\resources\views/create.blade.php ENDPATH**/ ?>