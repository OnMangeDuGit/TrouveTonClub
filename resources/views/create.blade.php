@extends('template1')
@section('contenu')
<div class="card">
    <header class="card-header">
        <p class="card-header-title">Création d'une formation</p>
    </header>
    <div class="card-content">
        <div class="content">
            <form action="{{ route('formation.store') }}" method="POST">
                @csrf
                <div class="field">
                    <label class="label">Catégorie</label>
                    <div class="select">
                        <select name="categorie_id">
                            @foreach($categories as $categorie)
                                <option value="{{ $categorie->id }}">{{ $categorie->nom}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <?php $categorie_id = old('categorie_id') ?>
                <div class="field">
                    <label class="label">Catégorie</label>
                    <div class="select">
                        <select name="categorie_id">
                            @foreach($categories as $categorie)
                                <option value="{{ $categorie->id }}" {{($categorie-
>id==$categorie_id)?'selected ':''}}>{{ $categorie->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Catégorie</label>
                    <div class="control">
                        <input class="input" type="numeric" name="idcategorie" value="{{ old('idcategorie') }}">
                    </div>
                    @error('idcategorie')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror

                </div>
                <div class="field">
                    <label class="label">Nom de la formation</label>
                    <div class="control">
                        <textarea class="textarea" name="nomformation" placeholder="Description de la formation">{{ old('nomformation') }}</textarea>
                    </div>
                    @error('nomformation')
                    <p class="help is-danger">Le nom de la formation est incorrect</p>
                    @enderror
                </div>
                <div class="field">
                    <label class="label">Date de début</label>
                    <div class="control">
                        <input class="input" type="date" name="datedebut" value="{{ old('datedebut') }}">
                    </div>
                    @error('datedebut')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field">
                    <label class="label">Durée</label>
                    <div class="control">
                        <input class="input" type="numeric" name="duree" value="{{ old('duree') }}">
                    </div>
                    @error('duree')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field">
                    <label class="label">Unité</label>
                    <div class="control">
                        <input class="input" type="text" name="unite" value="{{ old('unite') }}">
                    </div>
                    @error('unite')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field">
                    <div class="control">
                        <button class="button is-link">Envoyer</button>

                        <a class="button is-info" href="{{ route('formation.index') }}">Retour à la liste</a>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
