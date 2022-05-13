@extends('template')

@section('contenu')
    <div class="bg-[url('https://contrats.espl-campus.fr/wp-content/uploads/2020/09/campus_bon.png')]">
    </div>
    <br>

    <div class="container">
        <div class="row card text-white bg-dark">
            <h4 class="card-header">Connexion</h4>
            <div class="card-body">
                <form action="{{ url('HomeConnexion') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <input type="email" class="form-control  @error('identifiant') is-invalid @enderror" name="identifiant" id="identifiant" placeholder="Veuillez saisir votre identifiant" value="{{ old('identifiant') }}">
                        @error('identifiant')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control  @error('mdp') is-invalid @enderror" name="mdp" id="mdp" placeholder="*************">{{ old('mdp') }}</textarea>
                        @error('mdp')
                        <div class="invalid-feedback">{{ $mdp }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-secondary">Se connecter</button>
                </form>
            </div>
        </div>
    </div>
@endsection
