@extends('start.layout')

@section('title', 'Servicios')

@section('content')
    <section class="container mt-5 pt-5">
        <h3 class="text-uppercase text-center">Servicios</h3>
        <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus hic sint non rem
            quibusdam. Dicta facilis dignissimos deserunt, mollitia dolores</p>

        <div class="card-deck">
            <div class="card">
                <a data-toggle="modal" data-target="#myModal" href=""><img src="../img/fork.jpg" class="card-img-top img-fluid" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Ejemplo de imagen y boton sensible a modal.</p>
                </div>
                <div class="card-footer">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
                        Modal
                    </button>
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img src="../img/lolipop.png" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
                        Modal
                    </button>
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img src="../img/panda.png" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                        content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
                        Modal
                    </button>
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </section>
@endsection

@include('start._modal')
