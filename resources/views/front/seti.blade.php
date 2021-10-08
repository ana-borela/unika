@extends('layouts.web')

@section('content')

    <div class="nav-scroller bg-light">
        <nav class="nav nav-underline" aria-label="Secondary navigation">
            <a class="py-4 nav-link link-secondary" href="#title">Soluções</a>
            <a class="py-4 nav-link link-secondary" href="https://anydesk.com/pt/downloads" target="_blank">Acesso remoto</a>
            <a class="py-4 nav-link link-secondary" href="#clients">Clientes</a>


            <div class="col d-flex justify-content-end">
                <a class="pt-3 navbar-brand" href="{{ route('site.dara') }}"><img class="logo"
                        src="{{ asset('images/seti/logo-seti-min.png') }}" alt="Logo">
                </a>
            </div>

        </nav>
    </div>

    <section id="seti" class="text-white">

        <div class="container-fluid">
            <div class="row bg-white text-dark py-5">


                <div class="col-md-12 title">
                    <h1>Soluções em TI</h1>
                </div>

                <!-- Consultoria -->
                <div class="col-md-12 px-5" id="1">
                    <h2 class="py-3">Consultoria em TI</h2>
                    <p>
                        Milhares de empresas são fechadas anualmente por falta de PLANEJAMENTO que é imprescindível quando
                        se fala em gestão e crescimento. Seja a longo, médio ou curto prazo, a Unika desenvolve Plano
                        Diretor de TI e Comunicação - PDTI&C, atuando em toda estrutura ligada a TI, desde planejamento de
                        compras até projetos, oferecendo:
                    </p>
                </div>

                <div class="col-md-6 col-12">
                    <ul>
                        <li>Análise para investimento em equipamentos: rede de dados, Servidores, Telefonia, Impressão e
                            equipamentos.</li>
                        <li>Alinhamento estratégico, Governança de TI, Planos de metas/ação.</li>
                        <li>Políticas de segurança</li>
                        <li>Políticas de uso de equipamentos</li>
                        <li>Processos para melhor utilização de recursos (impressão, energia etc)</li>
                        <li>Emails corporativos</li>
                    </ul>
                </div>

                <hr class="featurette-divider my-5">

                <!-- Redes -->
                <div class="col-md-12 px-5" id="2">
                    <h2 class="py-3">Redes e Conectividade</h2>
                    <p>
                        Em sua empresa ou residência, a rede de computadores deve ser devidamente protegida para que o(s)
                        usuário(s) possa ter segurança tanto na hora de trabalhar, quanto para fazer transações comerciais e
                        até navegar pela internet. Uma rede bem estruturada, com pontos de distribuição bem localizados, seu
                        acesso tanto aos arquivos quanto a internet serão facilitados. Com proteção adequada a(s) sua(s)
                        máquina(s), é possível evitar vírus, os maiores causadores de danos. A Unika monitora, configura e
                        cuida do suporte de sua rede com eficiência e segurança. Temos ferramentas para:
                    </p>
                </div>

                <div class="col-md-12">
                    <ul>
                        <li>Inventário de equipamentos na rede</li>
                        <li>Alerta de vírus remotamente</li>
                        <li>Configuração de antivírus corporativo</li>
                        <li>e muitas outras...</li>
                    </ul>
                </div>

                <hr class="featurette-divider my-5">

                <!-- Assistencia -->
                <div class="col-md-12 px-5" id="3">
                    <h2 class="py-3">Assistência técnica</h2>
                    <p>
                        Para maior durabilidade da sua máquina, seja computador, notebook ou qualquer outro equipamento de
                        informática, a Unika oferece assistência técnica tanto para empresas como para equipamentos
                        pessoais. Com o passar do tempo ou após contraírem vírus, seu(s) equipamento(s) pode perder o
                        funcionamento convencional. Para evitar danos irreparáveis, faz-se fundamental essa assistência
                        técnica que teve ser feita por profissionais capacitados e treinados para tal. Nossos clientes tem
                        acesso à:
                    </p>
                </div>

                <div class="col-md-12">
                    <ul>
                        <li>Manutenção preventiva (detectar e resolver problemas antes que ocorram)</li>
                        <li>Manutenção corretiva</li>
                        <li>Atendimento local</li>
                        <li>Atendimento via e-Mail/Telefone</li>
                        <li>Atendimento remoto</li>
                    </ul>
                </div>

                <hr class="featurette-divider my-5">

                <!-- Backup -->
                <div class="col-md-12 px-5" id="4">
                    <h2 class="p-3">Soluções de Backup</h2>
                    <p>
                        Dados e informações são valiosíssimos tanto no trabalho quanto na vida pessoal. Empresários precisam
                        ter controle dos seus dados e arquivos. Sem esquecer as fotos pessoais, recordações familiares.
                        Existem diversos meios de assegurar que esses preciosos arquivos estejam seguros. Dentre eles, o
                        backup sendo o mais funcional. A Unika viabiliza a segurança de seus arquivos.
                    </p>
                </div>

                <div class="col-md-6 col-12">
                    <ul>
                        <li>Espelhamento Local</li>
                        <li>Upload para nuvem</li>
                    </ul>
                    <p style="padding-left: 37px">Prevenir é sempre a melhor escolha.</p>
                </div>


                <hr class="featurette-divider my-5">

                <!-- Helpdesk -->
                <div class="col-md-12 px-5" id="5">
                    <h2 class="py-3">Helpdesk local</h2>
                    <p>
                        Para maior durabilidade da sua máquina, seja computador, notebook ou qualquer outro equipamento de
                        informática, a Unika oferece assistência técnica tanto para empresas como para equipamentos
                        pessoais. Com o passar do tempo ou após contraírem vírus, seu(s) equipamento(s) pode perder o
                        funcionamento convencional. Para evitar danos irreparáveis, faz-se fundamental essa assistência
                        técnica que teve ser feita por profissionais capacitados e treinados para tal. Nossos clientes tem
                        acesso à:
                    </p>
                </div>

                <div class="col-md-6 col-12">
                    <ul>
                        <li>Manutenção preventiva (detectar e resolver problemas antes que ocorram)</li>
                        <li>Manutenção corretiva</li>
                        <li>Atendimento local</li>
                        <li>Atendimento via e-Mail/Telefone</li>
                        <li>Atendimento remoto</li>
                    </ul>
                </div>

                <hr class="featurette-divider my-5">

                <!-- Servidores -->
                <div class="col-md-12 px-5" id="6">
                    <h2 class="py-3">Manutenção de servidores</h2>
                    <p>
                        É de fundamental importância para o bom funcionamento de uma empresa o monitoramento com
                        detalhamento. Desde um simples acesso a sites indesejados, a monitoramento de câmeras de segurança.
                        A Unika configura redes de acordo com a necessidade de cada empresa e cliente com plena segurança.
                        Configuramos servidores na plataforma do Linux e Windows, dentre os quais:
                    </p>
                </div>

                <div class="col-md-6 col-12">
                    <ul>
                        <li>Serviço de Diretório (contas de usuários unificadas)</li>
                        <li>FTP (Transferência de arquivos via rede com segurança e velocidade)</li>
                        <li>Aplicação (Centralização de aplicativos da empresa)</li>
                        <li>Terminal (Acesso a serviços de terminal remoto)</li>
                        <li>Proxy (acesso a sites e informações na rede)</li>
                    </ul>
                </div>

                <div class="col-md-6 col-12">
                    <ul>
                        <li>Firewall (Controle de entradas e saídas de rede)</li>
                        <li>VPN (Integração site to site e site to client)</li>
                        <li>Arquivos (centralizar informações da empresa)</li>
                        <li>Virtualização (servidores e desktops)</li>
                        <li>Web Server (Hospedagem LAMP)</li>
                    </ul>
                </div>

            </div>

        </div>

        <!-- Clientes -->
        <div class="container py-5" id="clients">
            <div class="row">

                <div class="col-md-12 title" id="clients">
                    <h1>Clientes</h1>
                </div>

                <div class="col-12 col-md-2 py-2">
                    <img class="partners-images" src="{{ asset('images/parceiros/bandeirantes-min.png') }}" alt="">
                </div>

                <div class="col-12 col-md-2 py-2">
                    <img class="partners-images" src="{{ asset('images/parceiros/cell-center-min.png') }}" alt="">
                </div>

                <div class="col-12 col-md-2 py-2">
                    <img class="partners-images" src="{{ asset('images/parceiros/iso-min.png') }}" alt="">
                </div>

                <div class="col-12 col-md-2 py-2">
                    <img class="partners-images" src="{{ asset('images/parceiros/lm-supermercados-min.jpg') }}" alt="">
                </div>

                <div class="col-12 col-md-2 py-2">
                    <img class="partners-images" src="{{ asset('images/parceiros/nhdfoods-min.jpg') }}" alt="">
                </div>

                <div class="col-12 col-md-2 py-2">
                    <img class="partners-images" src="{{ asset('images/parceiros/fundacao-triangulo-min.png') }}" alt="">
                </div>

                <div class="col-12 col-md-2 py-2">
                    <img class="partners-images" src="{{ asset('images/parceiros/talaricos-min.png') }}" alt="">
                </div>

                <div class="col-12 col-md-2 py-2">
                    <img class="partners-images" src="{{ asset('images/parceiros/aciu-min.jpg') }}" alt="">
                </div>

                <div class="col-12 col-md-2 py-2">
                    <img class="partners-images" src="{{ asset('images/parceiros/cartorio-protesto-min.png') }}" alt="">
                </div>

                <div class="col-12 col-md-2 py-2">
                    <img class="partners-images" src="{{ asset('images/parceiros/cartorio-registro-min.png') }}" alt="">
                </div>

                <div class="col-12 col-md-2 py-2">
                    <img class="partners-images" src="{{ asset('images/parceiros/cdl-min.jpg') }}" alt="">
                </div>

                <div class="col-12 col-md-2 py-2">
                    <img class="partners-images" src="{{ asset('images/parceiros/rg-contabilidade-min.jpg') }}" alt="">
                </div>

                <div class="col-12 col-md-2 py-2">
                    <img class="partners-images" src="{{ asset('images/parceiros/ag-auditoria-min.jpg') }}" alt="">
                </div>

                <div class="col-12 col-md-2 py-2">
                    <img class="partners-images" src="{{ asset('images/parceiros/cozinha-min.jpg') }}" alt="">
                </div>

                <div class="col-12 col-md-2 py-2">
                    <img class="partners-images" src="{{ asset('images/parceiros/doidao-min.png') }}" alt="">
                </div>

                <div class="col-12 col-md-2 py-2">
                    <img class="partners-images" src="{{ asset('images/parceiros/efop-min.png') }}" alt="">
                </div>

                <div class="col-12 col-md-2 py-2">
                    <img class="partners-images" src="{{ asset('images/parceiros/fit-min.png') }}" alt="">
                </div>

                <div class="col-12 col-md-2 py-2">
                    <img class="partners-images" src="{{ asset('images/parceiros/goodsoy-min.png') }}" alt="">
                </div>

                <div class="col-12 col-md-2 py-2">
                    <img class="partners-images" src="{{ asset('images/parceiros/jcoadvocacia-min.png') }}" alt="">
                </div>

                <div class="col-12 col-md-2 py-2">
                    <img class="partners-images" src="{{ asset('images/parceiros/ultragaz-min.png') }}" alt="">
                </div>

                <div class="col-12 col-md-2 py-2">
                    <img class="partners-images" src="{{ asset('images/parceiros/mac-min.jpg') }}" alt="">
                </div>

                <div class="col-12 col-md-2 py-2">
                    <img class="partners-images" src="{{ asset('images/parceiros/oab-min.jpg') }}" alt="">
                </div>

                <div class="col-12 col-md-2 py-2">
                    <img class="partners-images" src="{{ asset('images/parceiros/omni-min.png') }}" alt="">
                </div>

                <div class="col-12 col-md-2 py-2">
                    <img class="partners-images" src="{{ asset('images/parceiros/penergetic-min.png') }}" alt="">
                </div>

            </div>
        </div>

    </section>
@endsection
