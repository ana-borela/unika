@extends('layouts.web')

@section('content')

    <!--Banner-->
    <section id="banner">
        <div class="banner-image" style="background-image: url('{{ asset('images/banner01.jpg') }}')">
            <h1 class="banner-title display-5" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">Desde de
                1991. <br>E enquanto exigirem qualidade. </h1>
        </div>

    </section>

    <!--Serviços-->
    <section class="services text-light">
        <div class="container py-5 text-center" data-aos="fade-up">
            <div class="row">
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

    <!--Sobre-->
    <section id="about">
        <div class="container">
            <div class="row mb-2">

                <div class="col-12 col-md-8">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col-auto d-none d-lg-block">
                            <img class="group-image" src="{{ asset('images/image01.jpg') }}" alt="teste">
                        </div>
                        <div class="col p-4 d-flex flex-column position-static" data-aos="fade-right">
                            <h1 class="text-center">O Grupo</h1>
                            <p class="card-text mb-auto">Somos um grupo formado pela busca constante por inovação.
                                Tecnologia e
                                criatividade são alguns de
                                nossos produtos e a excelência, a nossa fonte de inspiração. Para um mercado cada vez mais
                                exigente,
                                queremos sempre oferecer melhores soluções. Há vinte e cinco anos, entregamos qualidade e
                                contribuímos para o desenvolvimento de pessoas e mercados.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4" data-aos="fade-left">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <h3 class="mb-0 text-center p-3">Oportunidades</h3>
                            <p class="card-text mb-auto">Quem trabalha aqui, ama o que faz. Apreciamos pessoas que resolvem
                                problemas, agem proativamente e querem construir um mundo melhor. Se você se identifica com
                                esta filosofia de trabalho, deveria se juntar a nós. Envie seu perfil no Linkedin e sua
                                motivação de candidatura para:</p>
                            <button class="btn btn-light text-dark">jobs@gunika.co</button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4" data-aos="fade-right">
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
                    </div>
                </div>

                <div class="col-12 col-md-4" data-aos="fade-right">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <h3 class="mb-0 text-center p-3">Visão</h3>
                            <p class="card-text mb-auto">Levar as melhores e mais modernas soluções em Tecnologia da
                                Informação, Comunicação Visual, Digital e principalmente os melhores resultados aos
                                nossos clientes com qualidade, agilidade e constante aprimoramento dos nossos serviços
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4" data-aos="fade-left">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <h3 class="mb-0 text-center p-3">Valores</h3>
                            <p class="card-text mb-auto pb-4">Ética, profissionalismo, respeito, valorização do ser humano
                                tudo isso incluindo amor ao trabalho. Sempre fazer o melhor, buscando a perfeição em cada
                                detalhe e o máximo resultado. Deus é o nosso guia nele buscamos o caminho.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!--Parceiros-->
    <section id="partners">
        <div class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title">Nossos parceiros</h1>
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/3pinti-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/aciu-min.jpg') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/adesg-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/ag-auditoria-min.jpg') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/araunah-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/bandeirantes-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/camara-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/cartorio-protesto-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/cartorio-registro-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/cascata-min.jpg') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/catavento-min.jpg') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/cdl-min.jpg') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/cell-center-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/cozinha-min.jpg') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/doidao-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/efop-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/empreender-min.jpg') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/filtros-e-velas-min.png') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
    
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/fit-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/fuka-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/fundacao-triangulo-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/goodsoy-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/iso-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/jcoadvocacia-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/liderexecutive-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/lm-supermercados-min.jpg') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/mac-min.jpg') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/nhdfoods-min.jpg') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/oab-araxa-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/oab-min.jpg') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/omni-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/penergetic-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/rg-contabilidade-min.jpg') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/solidez-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/soluti-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/spc-min.jpg') }}" alt="">
                        </div>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <div class="row">
    
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/studio55-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/talaricos-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/uberababaoproce-min.jpg') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/ultragaz-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/usa75-min.png') }}" alt="">
                        </div>
                        <div class="col-md-2">
                            <img class="partners-images" src="{{ asset('images/parceiros/zebu-min.png') }}" alt="">
                        </div>
                    </div>
                  </div>

            </div>
        </div>
    </section>

    <!--Depoimentos-->
    <section id="depoiment" class="p-5 bg-light">
        <div class="container">
            <div class="row bg-white">

                <div class="container">
                    <div class="row">

                        <div class="col-md-12 col-12">
                            <h1 class="title">
                                <i class="fas fa-quote-left"></i>
                                Depoimentos
                            </h1>
                        </div>
                        <div class="col-12 col-md-6 px-3">
                            <div class="row overflow-hidden flex-md-row mb-4 h-md-250 position-relative">
                                <div class="col-auto d-none d-lg-block pt-5">
                                    <img class="user-images image-fluid mx-auto d-block"
                                        src="{{ asset('images/depoimentos/user-cesar.jpg') }}" alt="">
                                    <p class="name-user"><strong>CÉSAR MARTINS</strong></p>
                                    <p class="text-center" style="padding-bottom: 2rem"><small>Supervisor / OAB
                                            Uberaba</small></p>
                                </div>
                                <div class="col p-4 d-flex flex-column position-static">
                                    <p>OAB Uberaba Trabalha com a Unika Informática há vários anos e estamos satisfeitos com
                                        os serviços prestados pela mesma. Estão sempre aprimorando e reciclando seus
                                        conhecimentos favorecendo assim um bom atendimento.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 px-3">
                            <div class="row overflow-hidden flex-md-row mb-4 h-md-250 position-relative">
                                <div class="col-auto d-none d-lg-block pt-5 border-start">
                                    <img class="user-images image-fluid mx-auto d-block"
                                        src="{{ asset('images/depoimentos/user-jordana.jpg') }}" alt="">
                                    <p class="name-user"><strong>JORDANA CASTRO</strong></p>
                                    <p class="text-center"><small>Secretaria do conselho / OAB Araxá</small></p>
                                </div>
                                <div class="col p-4 d-flex flex-column position-static">
                                    <p>O Grupo Unika trabalha com a OAB Araxá há um ano, e posso dizer que nesse período
                                        tivemos inúmeras melhorias em nosso site e programas. A equipe é altamente
                                        capacitada, sempre atendendo às nossas demandas com rapidez, qualidade e atenção.
                                        Estamos muito felizes com a parceria.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 px-3">
                            <div class="row overflow-hidden flex-md-row mb-4 h-md-250 position-relative">
                                <div class="col-auto d-none d-lg-block pt-5">
                                    <img class="user-images image-fluid mx-auto d-block"
                                        src="{{ asset('images/depoimentos/user-samuel.jpg') }}" alt="">
                                    <p class="name-user"><strong>SAMUEL PEREZ</strong></p>
                                    <p class="text-center"><small>Analista de TI / Grupo Araunah</small></p>
                                </div>
                                <div class="col p-4 d-flex flex-column position-static">
                                    <p class="pb-5">Escolhemos formar uma parceria com o Grupo Unika por ser um
                                        centro de excelência na qualidade em T.I. Possui profissionais capacitados,
                                        metodologia comprovada e excelentes recursos, que fazem com que estejamos plenamente
                                        satisfeitos com os resultados obtidos até agora.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 px-3">
                            <div class="row overflow-hidden flex-md-row mb-4 h-md-250 position-relative">
                                <div class="col-auto d-none d-lg-block pt-5 border-start">
                                    <img class="user-images image-fluid mx-auto d-block"
                                        src="{{ asset('images/depoimentos/user-manoel.jpg') }}" alt="">
                                    <p class="name-user"><strong>MANOEL RODRIGUES NETO</strong></p>
                                    <p class="text-center"><small>Presidente / ACIU</small></p>
                                </div>
                                <div class="col p-4 d-flex flex-column position-static">
                                    <p>Novos modelos de gestão atestam a necessidade de contratar especialistas. O Grupo
                                        Unika, empresa 100% uberabense, especialista em oferecer serviços de assessoria em
                                        tecnologia da informação é nosso parceiro há muitos anos. Destacamos sua
                                        competência, comprometimento, seriedade e qualidade na prestação de serviços.
                                        Obrigado por colaborar para que estejamos muito seguros ao atender diretamente a
                                        mais de 3.500 associados, e à cidade de Uberaba.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Contato-->
    <section id="contact">
        <div class="container py-5">
            <div class="row">
    
                <div class="col-md-12">
                    <h1 class="title">Onde nos encontrar</h1>
                </div>
                <div class="col-12 col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3755.127317225925!2d-47.93416025006824!3d-19.749744637762916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bad03206b6d003%3A0x2a81edbc251b5327!2sR.%20Alaor%20Prata%2C%20362%20-%20Estados%20Unidos%2C%20Uberaba%20-%20MG%2C%2038015-010!5e0!3m2!1spt-BR!2sbr!4v1632965204163!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="contact col-12 col-md-6 text-center pt-5 lead text-light">
                    <address class="p-4"><i class="fas fa-map-marker-alt"></i> 
                        R. Alaor Prata, 362 CEP 38015-010 <br>Uberaba/MG
                    </address>
                    <p class="p-4"><i class="fas fa-envelope">
                        </i> 
                        contato@gunika.co
                    </p>
                    <p class="mx-5 p-4">
                        <i class="fas fa-phone-alt"></i> 
                        34 3321.9911 
                    </p>
                </div>

            </div>
        </div>
    </section>

@endsection
