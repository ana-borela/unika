@extends('layouts.web')

@section('content')

    <!--Serviços-->
    <section id="service">

        <div class="container-fluid p-0">
            <div class="carousel slide m-0" data-bs-ride="carousel" id="service-carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#service-carousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
                    <button type="button" data-bs-target="#service-carousel" data-bs-slide-to="1"></button>
                </div>
                <div class="carousel-inner">
    
                    <div class="carousel-item active text-center background">
                        <div class="row">
    
                            <div class="col-md-6">
                                <img class="service-image" src="{{ asset('images/websites.png') }}" alt="">
                            </div>
                            <div class="col-md-6">
                                <h1 class="service-title">WEBSITES & SISTEMAS</h1>
                                <p class="lead px-5">Desenvolvimento de sistemas inteligentes, com as tecnologias mais modernas e com design responsivo.</p>
                                <a class="btn btn-light link-dark" href="{{ route('site.dara') }}">Conheça</a>
                            </div>

                        </div>
                    </div>

                    <div class="carousel-item text-center background">
                        <div class="row">
    
                            <div class="col-md-6">
                                <h1 class="display-6 service-title">SERVIÇOS EM TI</h1>
                                <p class="lead px-5">Soluções completas para sua empresa crescer com dimensionamento e segurança. Consultoria em TI. Assistência técnica.</p>
                                <a class="btn btn-light link-dark" href="{{ route('site.seti') }}">Conheça</a>
                            </div>
                            <div class="col-md-6">
                                <img class="service-image" src="{{ asset('images/servicos.png') }}" alt="">
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--Dara serviços-->
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h1 class="title">Desenvolvimento Web - Dara</h1>
                </div>

                <div class="col-12 col-md-6 mb-4">

                    <div class="card text-white text-center p-3 hvr-bounce-to-right background">
                        <a class="link-light text-decoration-none text-center" href="{{ route('site.dara') }}">
                            <h2 class="p-5">Desenvolvimento de websites</h2>
                        </a>
                    </div>

                </div>
                
                <div class="col-12 col-md-6 mb-4">

                    <div class="card text-center">
                        <div class="card card-body">
                            <a class="link-dark link-dark text-decoration-none text-center" href="{{ route('site.dara') }}">
                                <h2 class="p-5">Desenvolvimento de sistemas</h2>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!--Seti serviços-->
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-12">
                    <h1 class="title">Serviços em TI - Seti</h1>
                </div>

            </div>
        </div>

        <!-- Clientes -->
        <div class="container">
            <div class="row" data-masonry='{"percentPosition": true }'>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card px-5 background">
                        <a class="link-light text-decoration-none text-center" href="{{ asset('seti/#1') }}">
                            <h2 class="py-5">Consultoria em TI</h2>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card px-5">
                        <a class="link-dark text-decoration-none text-center" href="{{ asset('seti/#2') }}">
                            <h2>Redes e Conectividade</h2>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card card-body background">
                            <a class="link-light text-decoration-none text-center" href="{{ asset('seti/#3') }}">
                                <h2>Manutenção de servidores</h2>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card text-white text-center p-3 hvr-bounce-to-right background">
                        <a class="link-light text-decoration-none text-center" href="{{ asset('seti/#4') }}">
                            <h2 class="p-5">Assistência técnica</h2>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card text-center">
                        <div class="card card-body">
                            <a class="link-dark text-decoration-none text-center" href="{{ asset('seti/#5') }}">
                                <h2 class="p-5">Soluções de Backup</h2>
                            </a>
                        </div>
                    </div>
                </div>

                
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card p-4">
                        <a class="link-dark text-decoration-none text-center" href="{{ asset('seti/#6') }}">
                            <h2 class="p-5">Helpdesk local</h2>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </section>
    
@endsection
