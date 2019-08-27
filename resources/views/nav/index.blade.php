@extends('nav.layout')

@section('title', 'Nav Central')

@section('content')
    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand d-sm-block d-xs-block d-lg-none" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mr-auto">
                <a class="nav-item nav-link">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Features</a>
                <a class="nav-item nav-link" href="#">Pricing</a>
                <a class="nav-item nav-link" href="#">Pricing2</a>
            </div>

            <a class="navbar-brand d-md-block d-sm-none" href="#">Navbar</a>

            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Features</a>
                <a class="nav-item nav-link" href="#">Pricing</a>
                <a class="nav-item nav-link" href="#">Pricing2</a>
            </div>
        </div>
    </nav>
    <!-- Nav Fin -->
@endsection
