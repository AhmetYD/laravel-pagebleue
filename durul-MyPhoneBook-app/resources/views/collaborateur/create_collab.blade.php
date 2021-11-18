@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Création collaborateur') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="/collaborateur/create" method="POST">
                        @csrf
                        <input type="text" name="civilite" placeholder="Genre"> <br> <br>
                        <input type="text" name="nom_collab" placeholder="Entrer un nom"> <br> <br>
                        <input type="text" name="prenom_collab" placeholder="Entrer un prenom"> <br> <br>
                        <input type="text" name="rue_collab" placeholder="Entrer une rue"> <br> <br>
                        <input type="text" name="code_postal_collab" placeholder="Entrer un code postal"> <br> <br>
                        <input type="text" name="ville_collab" placeholder="Entrer une ville"> <br> <br>
                        <input type="text" name="numero_telephone_collab" placeholder="Entrer un numéro de telephone"> <br> <br>
                        <input type="text" name="email_collab" placeholder="Entrer un email"> <br> <br>
                        <input type="text" name="entreprise_collab" placeholder="Entrer une entreprise"> <br> <br>

                        <button type="submit">Ajouter</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection