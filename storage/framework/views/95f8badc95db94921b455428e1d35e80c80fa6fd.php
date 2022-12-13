<?php $__env->startSection('css'); ?>
    <style>
        .header{
            text-align: left;
            margin-top: 1px;
            margin-bottom: 10px;
            padding : 1em;
            border : 5px solid darkblue;
            background-color: darkorange;
            width  : auto;
            height : 100px;
        }
        .lien_header{
            margin-left: 1200px;
            text-decoration: black;
            font-size: 20px;
        }
        .lien_header2{
            margin-left: 10px;
            color: black;
            font-size: 20px;
        }

        .description_site{
            position: center;
            margin-left: 400px;
            border : 5px solid darkblue;
            padding : 0.5em;
            width  : 650px;
            height : auto;
            color: black;
            font-size: 30px;
            text-align: center;
            font-family: Amiri;


        }

        .menu{

            text-align: left;
            padding : 1em;
            border-radius: 5px;
            border : 5px solid;
            border-color: darkblue;
            color: black;
            background-color: lightgrey;
            width  : 100px;
            height : auto;

        }


        .button_menu {
            margin-right: 600px;
            margin-top: 10px;
            color: black;
            font-size: 1rem;
            padding-bottom: 10px;
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
        .button_connexion{
            margin-top: 10px;
            margin-left: 150px;
        }


    </style>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenu'); ?>
    <?php if(session()->has('info')): ?>
        <div class="notification is-success">
            <?php echo e(session('info')); ?>

        </div>
    <?php endif; ?>
    <header class="header">
        <h2> TrouveTonClub</h2>  <b class="lien_header"><a href="<?php echo e(route('acceuil.create')); ?>">Connexion</a></b><b class="lien_header2"><a href="<?php echo e(route('acceuil.create')); ?>">Inscription</a></b>
    </header>
    <div class="menu">
        <h2>Menu</h2>
        <div class="button_menu">
            <a  href="<?php echo e(route('acceuil.create')); ?>">Connexion</a>
            <a  href="<?php echo e(route('acceuil.create')); ?>">Inscription</a>
        </div>
    </div>

    <div >
        <p class="description_site">Bonjour et Bienvenue sur TrouveTonClub.com, le site qui met en relation joueur et club.
            Inscrivez-vous en cliquant sur l'onglet inscription dans le menu ou en haut à droite de votre écran.
            Toute l'équipe de TrouveTonClub vous souhaite la bonne chance dans vos recherches.
        </p>
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

<?php echo $__env->make('template1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SIO\Laravel\TrouveTonClub\resources\views/acceuil.blade.php ENDPATH**/ ?>