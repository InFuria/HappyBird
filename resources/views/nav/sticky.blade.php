@extends('nav.layout')

@section('title', 'Sticky')

@section('style')
<style>
    body{
        font-family: 'Raleway', sans-serif;
    }

    .sticky-top-secondary{
        position: -webkit-sticky;
        position: sticky;
        top: 56px;
        z-index: 1030;
    }

    .container-fluid{
        height: 250px;
    }

</style>
@endsection

@section('content')
    <!-- Menu Superior -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Fin Menu Superior -->

    <div class="container-fluid bg-warning"></div>

    <!-- Menu Inferior -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top-secondary">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Fin Menu Inferior -->

    <div class="container-fluid bg-warning"></div>
    <div class="container-fluid bg-warning"></div>
    <div class="container-fluid bg-warning"></div>
    <div class="container-fluid bg-warning"></div>

@endsection

@section('js')

@endsection
