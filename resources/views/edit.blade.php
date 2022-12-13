@extends('template1')
@section('contenu')
<div class="card">
    <header class="card-header">
        <p class="card-header-title">Modification d'une formation</p>
    </header>
    <div class="card-content">
        <div class="content">
            <form class="form-horizontal" method="POST" action="{{ route('formation.update', $formation->id) }}">
                {{ csrf_field() }}

                {{ method_field('PUT') }}

                <div class="field">
                    <label class="label">Catégorie</label>
                    <div class="control">
                        <input id="idcategorie" type="text"   name="idcategorie" value="{{ old('idcategorie',$formation->idcategorie) }}" required>
                    </div>
                    @error('idcategorie')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="field">
                    <label for="nomformation" class="label">Nom de la formation</label>

                    <div class="control">
                        <textarea class="textarea" id="nomformation" name="nomformation" placeholder="Description de la formation">{{ old('nomformation',$formation->nomformation) }}</textarea>
                    </div>
                    @error('nomformation')
                    <p class="help is-danger">Le nom de la formation est incorrect</p>
                    @enderror

                </div>
                <div class="field">
                    <label for="datedebut" class="label">Date de début</label>
                    <div class="control">
                        <input id="datedebut" type="date"   name="datedebut" value="{{ old('datedebut',$formation->datedebut) }}" required>
                    </div>
                    @error('datedebut')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>
                <div class="field">
                    <label for="duree" class="label">Durée</label>
                    <div class="control">
                        <input id="duree" type="numeric" name="duree" value="{{ old('duree',$formation->duree) }}" >
                        @error('duree')
                        <div class="invalid-feedback">La duree est obligatoire et doit être inferieure à 1000</div>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label for="unite" class="label">Unité</label>
                    <div class="control">
                        <input id="unite" type="text"  name="unite" value="{{ old('unite',$formation->unite) }}" >
                        @error('unite')
                        <div class="invalid-feedback">L'unité est obligatoire et doit faire moins de 10 caractères</div>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-link">
                            Enregistrer
                        </button>
                        <a class="button is-info" href="{{ route('formation.index') }}">Retour à la liste</a>
                    </div>
                    <?php $categorie_id = old('categorie_id', $categorie_id) ?>
                    <div class="field">
                        <label class="label">Catégorie</label>
                        <div class="select">
                            <select name="categorie_id">
                                @foreach($categories as $categorie)
                                    <option value="{{ $categorie->id }}"
                                        {{($categorie->id==$categorie_id)?'selected ':''}}> {{old('nom',$categorie->nom)}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
