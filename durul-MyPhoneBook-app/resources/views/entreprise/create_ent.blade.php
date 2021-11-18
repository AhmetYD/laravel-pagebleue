@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Création entreprise') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row justify-content-center">
                    <form action="/entreprise/create" method="POST">
                        @csrf
                        
                        <input type="text" name="nom_ent" placeholder="Entrer un nom"> <br> <br>
                        <input type="text" name="rue_ent" placeholder="Entrer une rue"> <br> <br>
                        <input type="text" name="code_postal_ent" placeholder="Entrer un code postal"> <br> <br>
                        <input type="text" name="ville_ent" placeholder="Entrer une ville"> <br> <br>
                        <input type="text" name="numero_telephone_ent" placeholder="Entrer un numéro de telephone"> <br> <br>
                        <input type="text" name="email_ent" placeholder="Entrer un email"> <br> <br>
                        <button type="submit">Ajouter</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection