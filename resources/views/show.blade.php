    @extends('template1')
    @section('contenu')
        <div class="card">
            <header class="card-header">
                <p class="card-header-title"><strong>Nom de la formation</strong> : {{ $formation->nomformation }}</p>
            </header>
            <div class="card-content">
                <div class="content">
                    <p>Date de début : {{ $formation->datedebut }}</p>
                    <hr>
                    <p>{{ $formation->duree }} {{ $formation->unite }} </p>
                    <p>Catégorie : {{ $categorie }}</p>
                     <p>Catégorie : {{ $formation->idcategorie }} </p>
                </div>
            </div>
            <footer class="card-footer is-centered">
            <a class="button is-info" href="{{ route('formation.index') }}">Retour à la liste</a>
        </footer>
        </div>
    @endsection
