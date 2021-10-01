@extends('layouts.web')

@section('content')

    <nav class="navbar navbar-expand-md bg-white border-top">
        <div class="container-fluid">

            <div class="collapse navbar-collapse d-flex justify-content-start" id="navbar">
                <ul class="navbar-nav mb-2 mb-md-0">
                    <li class="nav-item px-3">
                        (34) 3321-9911
                    </li>
                    <li class="nav-item px-3">
                        contato@gunika.co
                    </li>
                </ul>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="{{ route('site.dara') }}"><img class="logo"
                    src="{{ asset('images/dara/logo-dara-min.png') }}" alt="Logo">
            </a>

        </div>
    </nav>

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h1 class="title">Websites</h1>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-2 p-0">
                <a target="_blank" href="http://www.macdesign.com.br"><img class="partners-images" src="{{ asset('images/parceiros/mac-min.jpg') }}" alt=""></a>
            </div>

            <div class="col-md-2 p-0">
                <a target="_blank" href="https://www.aciu.com.br"><img class="partners-images" src="{{ asset('images/parceiros/aciu-min.jpg') }}" alt=""></a>
            </div>

            <div class="col-md-2 p-0">
                <a target="_blank" href="http://www.adesgtriangulo.com.br"><img class="partners-images" src="{{ asset('images/parceiros/adesg-min.png') }}" alt=""></a>
            </div>

            <div class="col-md-2 p-0">
                <a target="_blank" href="https://camarauberaba.mg.gov.br"><img class="partners-images" src="{{ asset('images/parceiros/camara-min.png') }}" alt=""></a>
            </div>

            <div class="col-md-2 p-0">
                <a target="_blank" href="https://www.cascatasorveteria.com.br"><img class="partners-images" src="{{ asset('images/parceiros/cascata-min.jpg') }}" alt=""></a>
            </div>

            <div class="col-md-2 p-0">
                <a target="_blank" href="http://www.spassocatavento.com.br"><img class="partners-images" src="{{ asset('images/parceiros/catavento-min.jpg') }}" alt=""></a>
            </div>

            <div class="col-md-2 p-0">
                <a target="_blank" href="http://www.cozinhadouro.com.br"><img class="partners-images" src="{{ asset('images/parceiros/cozinha-min.jpg') }}" alt=""></a>
            </div>

            <div class="col-md-2 p-0">
                <a target="_blank" href="http://www.aciu.com.br/empreender"><img class="partners-images" src="{{ asset('images/parceiros/empreender-min.jpg') }}" alt=""></a>
            </div>

            <div class="col-md-2 p-0">
                <a target="_blank" href="https://filtrosevelas.com.br"><img class="partners-images" src="{{ asset('images/parceiros/filtros-e-velas-min.png') }}" alt=""></a>
            </div>

            <div class="col-md-2 p-0">
                <a target="_blank" href="http://www.jcoadvocacia.com.br/em-breve/"><img class="partners-images" src="{{ asset('images/parceiros/jcoadvocacia-min.png') }}" alt=""></a>
            </div>

            <div class="col-md-2 p-0">
                <a target="_blank" href="https://www.oabaraxa.org.br"><img class="partners-images" src="{{ asset('images/parceiros/oab-araxa-min.png') }}" alt=""></a>
            </div>

            <div class="col-md-2 p-0">
                <a target="_blank" href="https://www.oabuberaba.org.br"><img class="partners-images" src="{{ asset('images/parceiros/oab-min.jpg') }}" alt=""></a>
            </div>

             <div class="col-md-2 p-0">
                <a target="_blank" href="http://www.araunah.com.br"><img class="partners-images" src="{{ asset('images/parceiros/araunah-min.png') }}" alt=""></a>
            </div>

            <div class="col-md-2 p-0">
                <a target="_blank" href="http://fuka.com.br"><img class="partners-images" src="{{ asset('images/parceiros/fuka-min.png') }}" alt=""></a>
            </div>

            <div class="col-md-2 p-0">
                <a target="_blank" href="https://www.solidez.cnt.br"><img class="partners-images" src="{{ asset('images/parceiros/solidez-min.png') }}" alt=""></a>
            </div>

            <div class="col-md-2 p-0">
                <a target="_blank" href="http://www.grafica3pinti.com.br"><img class="partners-images" src="{{ asset('images/parceiros/3pinti-min.png') }}" alt=""></a>
            </div>

        </div>
    </div>

@endsection
