@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
        <a class="navbar-brand">Custom Login</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item mr-auto">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="alert alert-info mt-5" role="alert">
            <h4 class="alert-heading">Bienvenue!</h4>
            <p>{{ Auth::user()->name }}</p>
            <hr>
            <p class="mb-0">C'etait qu'un test d'authenitification personnaliser sans utiliser un package ...</p>
        </div>
    </div>
@endsection
