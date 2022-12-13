<?php $__env->startSection('css'); ?>
    <style>

        .header{
            text-align: left;
            margin-top: 1px;
            padding : 1em;
            border : 5px solid darkblue;
            background-color: darkorange;
            width  : auto;
            height : 100px;
            word-spacing: 100px;
        }



        .connexion_site{
            position: center;
            margin-left: 600px;
            border : 5px solid darkblue;
            padding : 1em;
            width  : 275px;
            height : 120px;


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
            margin-right: 600px;
            margin-top: 50px;
            color:black;

        }
        .button5{
            margin-top: 50px;
            margin-left: 30px;
            color:black;
        }
        .inscription{
            margin-left: 1000px;
        }
        .label_connexion{
            text-decoration: underline;
        }
        .button_email{
            margin-left: 50px;
        }
        .button_mdp{
            margin-left: 4px;
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
            <h2 class="header"> Trouvetonclub <a class="inscription" href="<?php echo e(route('acceuil.create')); ?>">inscription</a></h2>
            <h3 class="menu" >Menu <a class="button3" href="<?php echo e(route('acceuil.create')); ?>">connexion</a> <a class="button4" href="<?php echo e(route('acceuil.create')); ?>">inscription</a> <a class="button5" href="<?php echo e(route('acceuil.create')); ?>">annonce</a></h3>

            <div class="connexion_site">
                <h2 class="label_connexion">Connectez-vous</h2>
                <form name="form_connexion" method="post">
                    <label>Email :</label>
                    <input class="button_email" type="text" name="email_connexion">
                    <br><br>
                    <label>Mot de Passe :</label>
                    <input class="button_mdp" type="text" name="mdp_connexion">
                </form>
            </div>
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

<?php echo $__env->make('template1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SIO\Laravel\projet2\resources\views/connexion.blade.php ENDPATH**/ ?>