@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>

                </div>
            </div>
            <a href="{{ route('session.add') }}">Ajouter une donnée en session</a>
            <a href="{{ route('session.view') }}">Afficher les données de session</a>
            <a href="{{ route('session.delete') }}">Supprimer la session</a>
        </div>
    </div>
@endsection