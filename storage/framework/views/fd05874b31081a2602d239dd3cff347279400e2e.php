<?php $__env->startSection('css'); ?>
    <style>

        h2{
            text-align: left;
            margin-top: 1px;
            padding : 1em;
            border : 5px solid darkblue;
            background-color: darkorange;
            width  : 1500px;
            height : 100px;
            word-spacing: 100px;
        }



        .desciption_site{
            margin-top: 400px;
            margin-left: 500px;
            border : 5px solid darkblue;
            padding : 1em;
            width  : 500px;
            height : 400px;


        }
        .button{
            margin-left: 900px;
            background-color: darkorange;
            border : 1px solid darkorange;
            font-size: 20px;

        }
        .button2{
            background-color: darkorange;
            border : 1px solid darkorange;
            font-size: 20px;

        }
        .menu{
            text-align: left;
            padding : 1em;
            border : 5px solid ;
            background-color: black;
            border-color: black;
            color: yellow;
            width  : 100px;
            height : 10px;

        }
        h3{
            margin-top: 10px;
            margin-left: 30px;
            color:black;
            padding : 1em;
            border : 1px solid ;
            border-color: black;
            background-color: gainsboro;
            width  : 100px;
            height : 100px;
            margin-right: 40px;
        }
        .button3{
            margin-top: 50px;
            margin-left: 30px;
            color:black;



        }
        .button4{
            margin-top: 50px;
            margin-left: 30px;
            color:black;

        }
        .button5{
            margin-top: 50px;
            margin-left: 30px;
            color:black;


        }
    </style>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenu'); ?>
    <?php if(session()->has('info')): ?>
        <div class="notification is-success">
            <?php echo e(session('info')); ?>

        </div>
    <?php endif; ?>

    <div class="card" style="width:100%">
        <header class="card-header">
            <h2> Trouvetonclub<a class="button3" href="<?php echo e(route('acceuil.create')); ?>">connexion</a> <a class="button4" href="<?php echo e(route('acceuil.create')); ?>">inscription</a></h2>
            <h3 class="menu" >Menu <a class="button3" href="<?php echo e(route('acceuil.create')); ?>">connexion</a> <a class="button4" href="<?php echo e(route('acceuil.create')); ?>">inscription</a> <a class="button5" href="<?php echo e(route('acceuil.create')); ?>">annonce</a></h3>


            <h1 class="desciption_site">sa marche</h1>

            <div>

                </select>
            </div>

            <table class="table is-hoverable" >


                </tbody>
            </table>
    </div>
    </div>
    <footer class="card-footer">

    </footer>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SIO\Laravel\projet2\resources\views/acceuil.blade.php ENDPATH**/ ?>