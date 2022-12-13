@extends('template1')
@section('contenu')
<div class="card">
    <header class="card-header">
        <p class="card-header-title">supression d'une formation</p>
    </header>
    <div class="card-content">
        <div class="content">
            <form action="{{ route('formation.destroy', $formation->id) }}" method="post">
                @csrf
                {{ method_field(’DELETE’) }}
                <button class="button is-danger" type="submit">Supprimer</button>
            </form>
        </div>
    </div>
</div>

@endsection
