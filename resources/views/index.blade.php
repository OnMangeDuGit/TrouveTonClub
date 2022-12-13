@extends('template1')
@section('css')
    <style>
        .card-footer {
            justify-content: center;
            align-items: center;
            padding: 0.4em;
        }
        select, .is-info {
            margin: 0.3em;
        }
        .card-header-title{
            margin-top: 100%;
        }
        .card_info{
            margin-top:100%;
            margin-right: 75%;
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
            <p class="card-header-title">TrouveTonClub</p>
            <p class="card_info">Inscription</p>
            <p class="card_info">Connexion</p>

            <div class="select">
                <select onchange="window.location.href = this.value">
                    <option value="{{ route('acceuil.index') }}" @unless($slug) selected
                        @endunless>Annonce </option>
                    @foreach($categories as $categorie)
                        <option value="{{ route('formation.categorie', $categorie->slug) }}"
                            {{ $slug == $categorie->slug ? 'selected' : '' }}>{{ $categorie->nom }}</option>
                    @endforeach
                </select>
            </div>

            <table class="table is-hoverable" >
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nom de la formation</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
    </div>
    <footer class="card-footer">

    </footer>
    </div>
@endsection
