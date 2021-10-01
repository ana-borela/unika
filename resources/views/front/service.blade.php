@extends('layouts.web')

@section('content')
    <!--Serviços-->
    <section id="service">

        <!--Dara serviços-->
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h1 class="title">Desenvolvimento Web - Dara</h1>
                </div>

                <div class="col-12 col-md-6">
                    <a href="{{ route('site.dara') }}">
                        <h2>Desenvolvimento de sistemas</h2>
                    </a>
                </div>

                <div class="col-12 col-md-6">
                    <a href="{{ route('site.dara') }}">
                        <h2>Desenvolvimento de websites</h2>
                    </a>
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
                    <div class="card">
                        <img src="{{ asset('images/seti/consultoria-min.jpg') }}" alt="" style="height: 200, widht:100%;">
                        <div class="card-body">
                            <a class="link-secondary text-decoration-none text-center" href="{{ asset('seti/#1') }}">
                                <h2>Consultoria em TI</h2>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card p-3">
                        <figure class="p-3 mb-0">
                            <a class="link-secondary text-decoration-none text-center" href="{{ asset('seti/#2') }}">
                                <h2>Redes e Conectividade</h2>
                            </a>
                        </figure>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <a class="link-secondary text-decoration-none text-center" href="{{ asset('seti/#3') }}">
                                <h2>Manutenção de servidores</h2>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card text-white text-center p-3">
                        <figure class="mb-0">
                            <a class="link-secondary text-decoration-none text-center" href="{{ asset('seti/#4') }}">
                                <h2 class="p-3">Assistência técnica</h2>
                            </a>
                        </figure>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="background card text-center">
                        <div class="card-body">
                            <a class="link-light text-decoration-none text-center" href="{{ asset('seti/#5') }}">
                                <h2 class="p-5">Soluções de Backup</h2>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/seti/backup-min.jpg') }}" alt="" style="height: 200, widht:100%;">
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card p-3">
                        <figure class="mb-0">
                            <a class="link-secondary text-decoration-none text-center" href="{{ asset('seti/#6') }}">
                                <h2 class="p-5">Helpdesk local</h2>
                            </a>
                        </figure>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
