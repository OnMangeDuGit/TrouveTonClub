@extends('template1')
@section('css')
<style>


    .debut{
        text-align: left;
        margin-top: 1px;
        padding : 1em;
        border : 5px solid darkblue;
        background-color: darkorange;
        width  : auto;
        height : 100px;
        word-spacing: 100px;
    }
    .button{
        margin-left: 800px;
        color:black;
        background-color: darkorange;
        border : 1px solid darkorange;
        font-size: 20px;

    }
    .create_annonce{
        margin-top: 200px;
        margin-left: 500px;
        border : 1px solid black;
        padding : 1em;
        width  : 500px;
        height : 400px;


    }
    .label_annonce{
        margin-top: 1px;
        font-style: italic;
        font-size: 40px;

    }
    .des{

        width: 200px;
        height: 100px;

    }
    .button_annonce{
        margin-left: 300px;
        margin-top: 50px;

    }
    .retour_index{
        margin-left: 1300px;
    }
</style>
@endsection
@section('contenu')
    @if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card" style="width:100%">
        <header class="card-header">
            <h2 class="debut" >Trouvetonclub<a class="button" href="{{ route('acceuil.connexion') }}">connexion</a></h2>
   <div>
       <div class="create_annonce">
           <h4 class="label_annonce">Créer une annonce</h4>
           <form name="form_connexion" method="post">

               <label>Titre de l'annonce :</label>
               <input class="titre" type="text" name="titre_annonce">
               <br><br>

               <label>Description:</label>
               <input class="des" type="text" name="des_annonce">
               <br><br>

               <label>Poste recherchée:</label>
               <input class="post" type="text" name="post_annonce">
               <br><br>

               <label>Salaire(facultatif):</label>
               <input class="button_sal" type="text" name="sal_annonce">
               <br><br>

               <div class="button_annonce">
                   <button type="submit" style="margin-right: 50px">Valider
                       <button type="reset">Effacer
               </div>
           </form>

       </div>
       <a class="retour_index" href="{{ route('acceuil.index') }}">Retour à l'acceuil</a>
            @endsection

