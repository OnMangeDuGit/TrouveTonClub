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

        }


        .desciption_site{
            display: inline-block;
            position:center;
            margin-top: 250px;
            margin-left: 100px;
            border : 5px solid darkblue;
            padding : 1em;
            width  : 500px;
            height : 200px;


        }
        .desciption_site2{
            display: inline-block;
            position: absolute ;
            margin-top:250px;
            margin-left: 200px;
            border : 5px solid darkblue;
            padding : 1em;
            width  : 500px;
            height : 200px;
        }





        .button{
            margin-left: 800px;
            color:black;
            background-color: darkorange;
            border : 1px solid darkorange;
            font-size: 20px;

        }
        .button2{
            background-color: darkorange;
            color:black;
            border : 1px solid darkorange;
            font-size: 20px;

        }
        .menu{
            margin-left: 50px;
            text-align: left;
            padding : 1em;
            border-radius: 5px;
            border : 5px solid ;
            background-color: black;
            border-color: black;
            color: yellow;
            width  : 100px;
            height : 10px;

        }
        .menu2{
            color:black;


            margin-top: 10px;
            margin-left: 30px;
            color:black;
            padding : 1em;
            border : 1px solid ;
            border-color: black;
            background-color: gainsboro;
            width  : 150px;
            height : 100px;
            margin-right: 40px;


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
            <h2 class="debut" >Trouvetonclub<a class="button" href="{{ route('acceuil.crerannonce') }}">créer une annonce</a> <a class="button2" href="{{ route('acceuil.create') }}">Deconnexion</a> </h2>
            <h3 class="menu" >Menu
                <div class="menu2">
                            <br>
                            <a href="{{ route('acceuil.crerannonce') }}"> créer une annonce
                                <a href="{{ route('acceuil.create') }}">  les annonces
                                    <a href="{{ route('acceuil.create') }}">Déconnexion
                </div>

            </h3>
            <div>
                <h1  class="desciption_site" > information  du club </h1>
                <h1 class="desciption_site2" >Annonce du club</h1>
            </div>
            <a class="retour_index" href="{{ route('acceuil.index') }}">Retour à l'acceuil</a>



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
@endsection
