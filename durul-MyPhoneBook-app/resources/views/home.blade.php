@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    
                    <div class="home-button">
                        <br>
                        <form action="{{ route('entreprise') }}" method="get">
                            <button type="submit" class="btn btn-primary">Entreprise</button>
                        </form><br>
                        <form action="{{ route('collaborateur')}}" method="get">
                            <button type="submit" class="btn btn-primary">Collaborateur</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection