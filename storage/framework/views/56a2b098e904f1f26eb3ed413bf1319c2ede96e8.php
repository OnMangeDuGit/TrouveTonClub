<?php $__env->startSection('contenu'); ?>
<div class="card">
    <header class="card-header">
        <p class="card-header-title">Modification d'une formation</p>
    </header>
    <div class="card-content">
        <div class="content">
            <form class="form-horizontal" method="POST" action="<?php echo e(route('formation.update', $formation->id)); ?>">
                <?php echo e(csrf_field()); ?>


                <?php echo e(method_field('PUT')); ?>


                <div class="field">
                    <label class="label">Catégorie</label>
                    <div class="control">
                        <input id="idcategorie" type="text"   name="idcategorie" value="<?php echo e(old('idcategorie',$formation->idcategorie)); ?>" required>
                    </div>
                    <?php $__errorArgs = ['idcategorie'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="field">
                    <label for="nomformation" class="label">Nom de la formation</label>

                    <div class="control">
                        <textarea class="textarea" id="nomformation" name="nomformation" placeholder="Description de la formation"><?php echo e(old('nomformation',$formation->nomformation)); ?></textarea>
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
                    <label for="datedebut" class="label">Date de début</label>
                    <div class="control">
                        <input id="datedebut" type="date"   name="datedebut" value="<?php echo e(old('datedebut',$formation->datedebut)); ?>" required>
                    </div>
                    <?php $__errorArgs = ['datedebut'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>
                <div class="field">
                    <label for="duree" class="label">Durée</label>
                    <div class="control">
                        <input id="duree" type="numeric" name="duree" value="<?php echo e(old('duree',$formation->duree)); ?>" >
                        <?php $__errorArgs = ['duree'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">La duree est obligatoire et doit être inferieure à 1000</div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="field">
                    <label for="unite" class="label">Unité</label>
                    <div class="control">
                        <input id="unite" type="text"  name="unite" value="<?php echo e(old('unite',$formation->unite)); ?>" >
                        <?php $__errorArgs = ['unite'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">L'unité est obligatoire et doit faire moins de 10 caractères</div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-link">
                            Enregistrer
                        </button>
                        <a class="button is-info" href="<?php echo e(route('formation.index')); ?>">Retour à la liste</a>
                    </div>
                    <?php $categorie_id = old('categorie_id', $categorie_id) ?>
                    <div class="field">
                        <label class="label">Catégorie</label>
                        <div class="select">
                            <select name="categorie_id">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($categorie->id); ?>"
                                        <?php echo e(($categorie->id==$categorie_id)?'selected ':''); ?>> <?php echo e(old('nom',$categorie->nom)); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SIO\Laravel\projet2\resources\views/edit.blade.php ENDPATH**/ ?>