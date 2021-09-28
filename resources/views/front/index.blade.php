@extends('layouts.web')

@section('content')

    <!--Banner-->
    <section id="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="banner-image" src="{{ asset('images/banner01.jpg') }}" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="banner-title display-5">Desde de 1991. <br>E enquanto exigirem qualidade. </h1>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--Sobre-->
    <section id="about">
        <div class="container">
            <div class="row mb-2">
                <div class="col-md-12">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col-auto d-none d-lg-block">
                            <img class="teste" src="{{ asset('images/teste.jpg') }}" alt="teste">
                        </div>
                        <div class="col p-4 d-flex flex-column position-static">
                            <h1 class="text-center">O Grupo</h1>
                            <p class="card-text mb-auto">Somos um grupo formado pela busca constante por inovação. Tecnologia e
                                criatividade são alguns de
                                nossos produtos e a excelência, a nossa fonte de inspiração. Para um mercado cada vez mais
                                exigente,
                                queremos sempre oferecer melhores soluções. Há vinte e cinco anos, entregamos qualidade e
                                contribuímos para o desenvolvimento de pessoas e mercados.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <h3 class="mb-0 text-center p-3">Missão</h3>
                            <p class="card-text mb-auto">Desde a fundação, nossa meta é de ser uma empresa referência no
                                mercado, com o objetivo é de sempre levar as melhores e mais modernas soluções para a
                                comunidade. Temos a missão de vencer os desafios e dar exemplo, como uma referência na
                                região
                            </p>
                        </div>
                        <div class="col p-4 d-flex flex-column position-static">
                            <h3 class="mb-0 text-center p-3">Visão</h3>
                            <p class="card-text mb-auto">Levar as melhores e mais modernas soluções em Tecnologia da
                                Informação, Comunicação Visual, Digital e principalmente os melhores resultados aos
                                nossos clientes com qualidade, agilidade e constante aprimoramento dos nossos serviços
                            </p>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img class="teste" src="{{ asset('images/teste.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--
            

            <div class="col p-4 d-flex flex-column position-static">
                            <h3 class="mb-0 text-center p-3">Valores</h3>
                            <p class="card-text mb-auto">Ética, profissionalismo, respeito, valorização do ser humano tudo
                                isso incluindo amor ao trabalho. Sempre fazer o melhor, buscando a perfeição em cada detalhe
                                e o máximo resultado. Deus é o nosso guia nEle buscamos o caminho.</p>
                        </div>
        -->

    </section>

    <!--Serviços-->
    <section class="services text-light">
        <div class="container py-5">
            <div class="row">
                <div class="title">
                    <h1>Serviços</h1>
                </div>
                <div class="service-box col-12 col-md-3 p-5">
                    <h2 class="fs-3">Desenvolvimento de sistemas</h2>
                </div>

                <div class="service-box col-12 col-md-3 p-5">
                    <h2 class="fs-3">Desenvolvimento de websites</h2>
                </div>

                <div class="service-box col-12 col-md-3 p-5">
                    <h2 class="fs-3" 2>Consultoria em TI</h2>
                </div>

                <div class="service-box col-12 col-md-3 p-5">
                    <h2 class="fs-3">Redes & Conectividade</h2>
                </div>

                <div class="service-box col-12 col-md-3 p-5">
                    <h2 class="fs-3">Manutenção de servidores</h2>
                </div>

                <div class="service-box col-12 col-md-3 p-5">
                    <h2 class="fs-3">Assistência técnica</h2>
                </div>

                <div class="service-box col-12 col-md-3 p-5">
                    <h2 class="fs-3">Soluções de Backup</h2>
                </div>

                <div class="service-box col-12 col-md-3 p-5">
                    <h2 class="fs-3">Helpdesk Local</h2>
                </div>
            </div>
        </div>
    </section>

    <!--Depoimentos-->
    <section id="deposition">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title">Depoimentos</h1>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-3 p-4 text-center">
                            <img class="user-images image-fluid mx-auto d-block"
                                src="{{ asset('images/depoimentos/user-cesar.jpg') }}" alt="">
                            <strong>CÉSAR MARTINS</strong><br>
                            <small>Supervisor / OAB Uberaba</small>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum aperiam illum eaque a. Beatae
                                facilis consequuntur quos cumque veritatis odio! Assumenda ad nobis qui vel voluptates
                                deleniti consequatur molestias aliquid.</p>
                        </div>

                        <div class="col-12 col-md-3 p-4 text-center">
                            <img class="user-images image-fluid mx-auto d-block"
                                src="{{ asset('images/depoimentos/user-jordana.jpg') }}" alt="">
                            <strong>JORDANA CASTRO</strong><br>
                            <small>Secretaria do conselho / OAB Araxá</small>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum aperiam illum eaque a. Beatae
                                facilis consequuntur quos cumque veritatis odio! Assumenda ad nobis qui vel voluptates
                                deleniti consequatur molestias aliquid.</p>
                        </div>

                        <div class="col-12 col-md-3 p-4 text-center">
                            <img class="user-images image-fluid mx-auto d-block"
                                src="{{ asset('images/depoimentos/user-manoel.jpg') }}" alt="">
                            <strong>MANOEL RODRIGUES NETO</strong><br>
                            <small>Presidente / ACIU</small>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum aperiam illum eaque a. Beatae
                                facilis consequuntur quos cumque veritatis odio! Assumenda ad nobis qui vel voluptates
                                deleniti consequatur molestias aliquid.</p>
                        </div>

                        <div class="col-12 col-md-3 p-4 text-center">
                            <img class="user-images image-fluid mx-auto d-block"
                                src="{{ asset('images/depoimentos/user-samuel.jpg') }}" alt="">
                            <strong>SAMUEL PEREZ</strong><br>
                            <small>Analista de TI / Grupo Araunah</small>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum aperiam illum eaque a. Beatae
                                facilis consequuntur quos cumque veritatis odio! Assumenda ad nobis qui vel voluptates
                                deleniti consequatur molestias aliquid.</p>
                        </div>

                    </div>

                </div>
    </section>

@endsection
