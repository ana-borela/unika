@extends('layouts.web')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-start">
                Website e Sistemas</h2>
                <p>Desenvolvimento de sistemas inteligentes, com as tecnologias mais modernas e com design responsivo.
                </p>
                <a href="#" class="btn btn-outline-secondary">Dara</a>
            </div>
            <div class="col-md-12 text-end">
                Serviços em TI</h2>
                <p>Soluções completas para sua empresa crescer com dimensionamento e segurança. Consultoria em TI.
                    Assistência técnica.</p>
                <a href="#" class="btn btn-outline-secondary">Seti</a>
            </div>
        </div>
    </div>

     <!--Marcas-->
     <section id="brands">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="container px-4 py-5" id="cards">
                        <h2 class="text-center pb-2 border-bottom">Nosas Marcas</h2>
                        <h3 class="text-center p-5">Conheça nossas empresas, produtos e serviços</h3>

                        <div class="row align-items-stretch py-5">
                            <div class="col-12 col-md-6 p-0 bg-light">
                                <div class="border border-light p-2 text-center overflow-hidden">
                                    <div class="my-3">
                                        <img class="card-image" src="{{ asset('images/dara/dara.png') }}" alt="">
                                    </div>
                                    <div class="shadow-sm mx-auto bg-white"
                                        style="width: 80%; height: 300px; border-radius: 5px 5px 0 0;">
                                        <h3 class="card-title display-6">Desenvolvimento</h3>
                                        <p class="pt-5 mt-5 mb-4 lead">Alta tecnologia dedicada à facilitar a
                                            aplicação de processos. Pessoas certas, nas horas certas e em lugares certos.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 p-0">
                                <div class="border border-light p-2 text-center overflow-hidden">
                                    <div class="my-3">
                                        <img class="card-image" src="{{ asset('images/seti/seti.png') }}" alt="">
                                    </div>
                                    <div class="bg-light shadow-sm mx-auto text-dark"
                                        style="width: 80%; height: 300px; border-radius: 5px 5px 0 0;">
                                        <h3 class="card-title display-6">Serviços em TI</h3>
                                        <p class="pt-5 mt-5 mb-4 lead">Num mundo cada vez mais conectado, nós aplicamos segurança em soluções de TI com qualidade e rapidez.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection