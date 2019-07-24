@extends('start.layout')

@section('title', 'Contacto')

@section('content')
    <section class="container mt-5 pt-5">
        <h3 class="text-uppercase text-center">Formularios de Contacto</h3>
        <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus hic sint non rem
            quibusdam. Dicta facilis dignissimos deserunt, mollitia dolores</p>

        <hr class="mt-3 mb-3">

        <div class="row col-12 py-5">

            <div class="col-12 bg-dark pt-4 px-5 text-white">
                <form action="">
                        <div class="form-group row">
                            <label class="col-2 col-form-label">Nombre</label>
                            <input type="text" placeholder="Ingrese su nombre" class="form-control col-10">
                        </div>

                        <div class="form-form-group row">
                            <label class="col-2 col-form-label">Email</label>
                            <input type="email" placeholder="Ingrese su email" class="form-control col-10">
                        </div>

                        <div class="form-group mt-5">
                            <button class="btn btn-danger">Enviar</button>
                        </div>
                    </form>
            </div>

            <hr class="m-4">

            <div class="col-12 bg-dark py-5 text-white">
                <form action="" class="form-inline justify-content-center flex-column flex-md-row">
                        <div class="form-group my-2">
                            <label class="d-none d-sm-block mx-2">Nombre</label>
                            <input type="text" placeholder="Ingrese su nombre" class="form-control">
                        </div>

                        <div class="form-group my-2">
                            <label class="d-none d-sm-block mx-2">Apellido</label>
                            <input type="text" placeholder="Ingrese su apellido" class="form-control">
                        </div>

                        <div class="form-group mx-5 my-2 ">
                            <button class="btn btn-danger" type="submit">Enviar</button>
                        </div>
                    </form>
            </div>

        </div>
    </section>
@endsection
