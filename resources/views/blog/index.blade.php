@extends('blog.layout')

@section('title', 'Inicio')

@section('content')
    <!-- Slider -->
    <div class="container-fluid slider d-flex flex-column justify-content-center align-items-center">
        <div class="text-center">
            <h3 class="d-none d-xs-block d-md-inline-flex">Lorem ipsum dolor sit amet.</h3>
            <h1 class="display">Lorem ipsum dolor.</h1>
            <p class="lead d-none d-xs-block d-md-inline-flex">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
        </div>

        <form class="form-inline d-flex flex-column flex-sm-row">
            <div class="form-group mr-4">
                <input type="text" placeholder="Ingresa tu email aqui" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-danger" value="Enviar">
            </div>
        </form>

    </div>
    <!-- Fin Slider -->

    <!-- Main -->
    <div class="container mt-5 mb-5">
        <h3>Blog</h3>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur.</p>
        <hr>

        <div class="row">
            <!-- Articulos -->
            <div class="col-12 col-md-9">
                <div class="row mt-5">
                    <div class="col-3">
                        <img src="../img/panda.png" alt="" class="img-fluid">
                        <p class="lead text-center">{{ date('d-m-Y') }}</p>
                    </div>
                    <div class="col-9">
                        <a href="#"><h3>Lorem ipsum dolor sit amet, consectetur.</h3></a>
                        <a href="#"><span class="badge badge-primary">Primary</span></a>
                        <a href="#"><span class="badge badge-secondary">Secondary</span></a>
                        <a href="#"><span class="badge badge-success">Success</span></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum pariatur saepe suscipit?
                            Aliquam commodi cumque ipsum magnam nam natus obcaecati omnis optio ratione sapiente, velit
                            voluptates. Aspernatur cum distinctio eum ex excepturi, id nobis tempore voluptatem! Commodi
                            cumque dolore ea expedita itaque iure, modi neque pariatur ratione recusandae rerum
                            sunt.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, ipsam?</p>
                        <a href="#" class="btn btn-warning btn-sm">Leer mas...</a>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-3">
                        <img src="../img/fork.jpg" alt="" class="img-fluid">
                        <p class="lead text-center">{{ date('d-m-Y') }}</p>
                    </div>
                    <div class="col-9">
                        <a href="#"><h3>Lorem ipsum dolor sit amet, consectetur.</h3></a>
                        <a href="#"><span class="badge badge-primary">Primary</span></a>
                        <a href="#"><span class="badge badge-secondary">Secondary</span></a>
                        <a href="#"><span class="badge badge-success">Success</span></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum pariatur saepe suscipit?
                            Aliquam commodi cumque ipsum magnam nam natus obcaecati omnis optio ratione sapiente, velit
                            voluptates. Aspernatur cum distinctio eum ex excepturi, id nobis tempore voluptatem! Commodi
                            cumque dolore ea expedita itaque iure, modi neque pariatur ratione recusandae rerum
                            sunt.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, ipsam?</p>
                        <a href="#" class="btn btn-warning btn-sm">Leer mas...</a>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-3">
                        <img src="../img/lolipop.png" alt="" class="img-fluid">
                        <p class="lead text-center">{{ date('d-m-Y') }}</p>
                    </div>
                    <div class="col-9">
                        <a href="#"><h3>Lorem ipsum dolor sit amet, consectetur.</h3></a>
                        <a href="#"><span class="badge badge-primary">Primary</span></a>
                        <a href="#"><span class="badge badge-secondary">Secondary</span></a>
                        <a href="#"><span class="badge badge-success">Success</span></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum pariatur saepe suscipit?
                            Aliquam commodi cumque ipsum magnam nam natus obcaecati omnis optio ratione sapiente, velit
                            voluptates. Aspernatur cum distinctio eum ex excepturi, id nobis tempore voluptatem! Commodi
                            cumque dolore ea expedita itaque iure, modi neque pariatur ratione recusandae rerum
                            sunt.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, ipsam?</p>
                        <a href="#" class="btn btn-warning btn-sm">Leer mas...</a>
                    </div>
                </div>
            </div>
            <!-- Articulos -->

            <!-- Aside -->
            <div class="col-12 col-md-3 mt-5">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
                <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Secondary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Success card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Danger card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
                <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Warning card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Info card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
                <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Light card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Dark card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <!-- Fin Aside -->
        </div>
    </div>
    <!-- Fin Main-->

    <!-- Footer -->
    <div class="container-fluid bg-dark text-white text-center py-3">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>
    <!-- Fin Footer -->
@endsection
