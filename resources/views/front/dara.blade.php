@extends('layouts.web')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/dara.css') }}" type="text/Css" />
@endpush
@section('content')
    <!--Dara-->
    <section  id="dara">
        <div class="nav-scroller bg-light">
            <nav class="nav nav-underline" aria-label="Secondary navigation">
                <a class="py-4 nav-link link-secondary" disable>(34) 3321-9911</a>
                <a class="py-4 nav-link link-secondary" disable>contato@gunika.co</a>
            </nav>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title text-white">Websites</h1>
                </div>
            </div>
        </div>
        <!--Websites-->
        <div class="container pb-5">
            <div class="row">
                {{-- LAC Advocacia - Ainda não foi pra producao --}}
                <div class="col-4 col-md-2 p-0 website-block">
                    <a href="#"> {{-- https://lacadvocacia.com.br/ --}}
                        <img class="partners-images" src="{{ asset('material/clientes/lac-advocacia.png') }}" alt="LAC Advocacia - Logo" />
                    </a>
                </div>
                {{-- NRServicos --}}
                <div class="col-4 col-md-2 p-0 website-block">
                    <a target="_blank" href="https://nrservicos.com/">
                        <img class="partners-images" src="{{ asset('material/clientes/nr-servicos.png') }}" alt="NRServicos - Logo" />
                    </a>
                </div>
                {{-- SCO --}}
                <div class="col-4 col-md-2 p-0 website-block">
                    <a target="_blank" href="https://scodese.com/">
                        <img class="partners-images" src="{{ asset('material/clientes/sco.png') }}" alt="SCO - Logo" />
                    </a>
                </div>
                {{-- SRU --}}
                <div class="col-4 col-md-2 p-0 website-block">
                    <a target="_blank" href="https://www.sru.com.br/">
                        <img class="partners-images" src="{{ asset('material/clientes/sru.png') }}" alt="SRU - Logo" />
                    </a>
                </div>
                {{-- Atmosphera --}}
                <div class="col-4 col-md-2 p-0 website-block">
                    <a target="_blank" href="https://atmospheracalcados.com.br/">
                        <img class="partners-images" src="{{ asset('material/clientes/atmosphera.png') }}" alt="Atmosphera Calçados - Logo" />
                    </a>
                </div>
                {{-- Girassol Engenharia --}}
                <div class="col-4 col-md-2 p-0 website-block">
                    <a target="_blank" href="https://www.girassolengenharia.com.br/">
                        <img class="partners-images" src="{{ asset('material/clientes/girassol-engenharia.png') }}" alt="Girassol Engenharia - Logo" />
                    </a>
                </div>
                {{-- Reserva Guidi Ecologia --}}
                <div class="col-4 col-md-2 p-0 website-block">
                    <a target="_blank" href="https://www.guidiecologia.com.br/">
                        <img class="partners-images" src="{{ asset('material/clientes/reserva-guidi.png') }}" alt="Reserva Guidi - Logo" />
                    </a>
                </div>
                {{-- Mac --}}
                <div class="col-4 col-md-2 p-0 website-block">
                    <a target="_blank" href="http://www.macdesign.com.br">
                        <img class="partners-images website-block-logo" src="{{ asset('images/parceiros/mac-min.jpg') }}" alt="">
                    </a>
                </div>
                {{-- Aciu --}}
                <div class="col-4 col-md-2 p-0 website-block">
                    <a target="_blank" href="https://www.aciu.com.br"><img class="partners-images" src="{{ asset('images/parceiros/aciu-min.jpg') }}" alt=""></a>
                </div>
                {{-- Adesg --}}
                <div class="col-4 col-md-2 p-0 website-block">
                    <a target="_blank" href="http://www.adesgtriangulo.com.br"><img class="partners-images" src="{{ asset('images/parceiros/adesg-min.png') }}" alt=""></a>
                </div>
                {{-- Cam. Uberaba - Verificar proprietario --}}
                {{-- <div class="col-4 col-md-2 p-0 website-block">
                    <a target="_blank" href="https://camarauberaba.mg.gov.br"><img class="partners-images" src="{{ asset('images/parceiros/camara-min.png') }}" alt=""></a>
                </div> --}}
                {{-- Cascata --}}
                <div class="col-4 col-md-2 p-0 website-block">
                    <a target="_blank" href="https://www.cascatasorveteria.com.br"><img class="partners-images" src="{{ asset('images/parceiros/cascata-min.jpg') }}" alt=""></a>
                </div>
                {{-- SpassoCatavento --}}
                <div class="col-4 col-md-2 p-0 website-block">
                    <a target="_blank" href="http://www.spassocatavento.com.br"><img class="partners-images" src="{{ asset('images/parceiros/catavento-min.jpg') }}" alt=""></a>
                </div>
                {{-- Cozinha de ouro - Não funciona --}}
                {{-- <div class="col-4 col-md-2 p-0 website-block">
                    <a target="_blank" href="http://www.cozinhadouro.com.br"><img class="partners-images" src="{{ asset('images/parceiros/cozinha-min.jpg') }}" alt=""></a>
                </div> --}}
                {{-- Aciu Empreender --}}
                <div class="col-4 col-md-2 p-0 website-block">
                    <a target="_blank" href="http://www.aciu.com.br/empreender"><img class="partners-images" src="{{ asset('images/parceiros/empreender-min.jpg') }}" alt=""></a>
                </div>
                {{-- Filtros e velas --}}
                <div class="col-4 col-md-2 p-0 website-block">
                    <a target="_blank" href="https://filtrosevelas.com.br"><img class="partners-images" src="{{ asset('images/parceiros/filtros-e-velas-min.png') }}" alt=""></a>
                </div>
                {{-- JCO Advocacia - Nao finalizado --}}
                <div class="col-4 col-md-2 p-0 website-block">
                    <a href="#"> {{-- http://www.jcoadvocacia.com.br/em-breve/ --}}
                        <img class="partners-images" src="{{ asset('images/parceiros/jcoadvocacia-min.png') }}" alt="">
                    </a>
                </div>
                {{-- OAB Araxa --}}
                <div class="col-4 col-md-2 p-0 website-block">
                    <a target="_blank" href="https://www.oabaraxa.org.br"><img class="partners-images" src="{{ asset('images/parceiros/oab-araxa-min.png') }}" alt=""></a>
                </div>
                {{-- OAB Uberaba --}}
                <div class="col-4 col-md-2 p-0 website-block">
                    <a target="_blank" href="https://www.oabuberaba.org.br"><img class="partners-images" src="{{ asset('images/parceiros/oab-min.jpg') }}" alt=""></a>
                </div>
                {{-- Araunha --}}
                 <div class="col-4 col-md-2 p-0 website-block">
                    <a target="_blank" href="http://www.araunah.com.br"><img class="partners-images" src="{{ asset('images/parceiros/araunah-min.png') }}" alt=""></a>
                </div>
                {{-- Fuka --}}
                <div class="col-4 col-md-2 p-0 website-block">
                    <a target="_blank" href="http://fuka.com.br"><img class="partners-images" src="{{ asset('images/parceiros/fuka-min.png') }}" alt=""></a>
                </div>
                {{-- Solidez --}}
                <div class="col-4 col-md-2 p-0 website-block">
                    <a target="_blank" href="https://www.solidez.cnt.br"><img class="partners-images" src="{{ asset('images/parceiros/solidez-min.png') }}" alt=""></a>
                </div>
                {{-- Grafica 3Pint - Verificar proprietario --}}
                {{-- <div class="col-4 col-md-2 p-0 website-block">
                    <a target="_blank" href="http://www.grafica3pinti.com.br"><img class="partners-images" src="{{ asset('images/parceiros/3pinti-min.png') }}" alt=""></a>
                </div> --}}
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    {{-- Locomotive --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js" type="text/Javascript"></script>s --}}
    {{-- ProgressBar --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/progressbar.js/0.6.1/progressbar.min.js" type="text/Javascript"></script>
@endpush
