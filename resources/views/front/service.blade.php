@extends('layouts.web')

@section('content')

    <!--Serviços-->
    <section id="service">

        <div class="container-fluid p-0 bg-white">
            <div class="carousel slide m-0" data-bs-ride="carousel" id="service-carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active text-center">
                        <div class="row">

                            <div class="col-md-6">
                                <img class="service-image" src="{{ asset('images/websites.png') }}" alt="">
                            </div>
                            <div class="col-md-6">
                                <h1 class="service-title">WEBSITES & SISTEMAS</h1>
                                <p class="lead px-5 service-content">Desenvolvimento de sistemas inteligentes, com as tecnologias mais modernas e com design responsivo.</p>
                                <a class="btn btn-dark link-light service-content mb-4" href="{{ route('site.dara') }}">Conheça</a>
                            </div>

                        </div>
                    </div>

                    <div class="carousel-item text-center ">
                        <div class="row">

                            <div class="col-md-6">
                                <h1 class="display-6 service-title">SERVIÇOS EM TI</h1>
                                <p class="lead px-5 service-content">Soluções completas para sua empresa crescer com dimensionamento e segurança. Consultoria em TI. Assistência técnica.</p>
                                <a class="btn btn-dark link-light service-content" href="{{ route('site.seti') }}">Conheça</a>
                            </div>
                            <div class="col-md-6">
                                <img class="service-image" src="{{ asset('images/servicos.png') }}" alt="">
                            </div>

                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#service-carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#service-carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>

                </div>
            </div>
        </div>

        <!--Dara serviços-->
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h1 class="title text-white">Desenvolvimento Web - Dara</h1>
                </div>

                <div class="col-12 col-md-6 mb-4 ">

                    <div class="card hvr text-white text-center p-3">
                        <a class="link-dark text-decoration-none text-center" href="{{ route('site.dara') }}">
                            <h2 class="p-5 service-card">Desenvolvimento de websites</h2>
                        </a>
                    </div>

                </div>

                <div class="col-12 col-md-6 mb-4">

                    <div class="hvr text-center">
                        <div class="card card-body">
                            <a class="link-dark text-decoration-none text-center" href="{{ route('site.dara') }}">
                                <h2 class="p-5 service-card">Desenvolvimento de sistemas</h2>
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
                    <h1 class="title text-white">Serviços em TI - Seti</h1>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row" data-masonry='{"percentPosition": true }'>

                <div class="col-12 col-md-6 mb-4 col-lg-4">
                    <div class="card hvr px-5 seti-services">
                        <a class="link-dark text-decoration-none text-center" href="{{ asset('seti/#1') }}">
                            <h2 class="py-5">Consultoria em TI</h2>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-4 col-lg-4">
                    <div class="card hvr px-5 seti-services">
                        <a class="link-dark text-decoration-none text-center" href="{{ asset('seti/#2') }}">
                            <h2>Redes e Conectividade</h2>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-4 col-lg-4">
                    <div class="card hvr seti-services">
                        <div class="card-body">
                            <a class="link-dark text-decoration-none text-center" href="{{ asset('seti/#3') }}">
                                <h2>Manutenção de servidores</h2>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-4 col-lg-4">
                    <div class="card hvr text-center p-3 hvr-bounce-to-right seti-services">
                        <a class="link-dark text-decoration-none text-center" href="{{ asset('seti/#4') }}">
                            <h2 class="p-5 service-card">Assistência técnica</h2>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-4 col-lg-4">
                    <div class="hvr text-center">
                        <div class="card card-body seti-services">
                            <a class="link-dark text-decoration-none text-center" href="{{ asset('seti/#5') }}">
                                <h2 class="p-5 service-card">Soluções de Backup</h2>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-6 mb-4 col-lg-4">
                    <div class="card hvr p-4 seti-services">
                        <a class="link-dark text-decoration-none text-center" href="{{ asset('seti/#6') }}">
                            <h2 class="p-5 service-card">Helpdesk local</h2>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </section>

@endsection
