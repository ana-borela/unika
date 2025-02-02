<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Unika</title>

        <!--Bootstap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
        </script>
        <!--Font Awesome-->
        <script src="https://kit.fontawesome.com/3d5c8bdd35.js" crossorigin="anonymous"></script>

        <!--CSS-->
        <link rel="stylesheet" href="{{ asset('css/web.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animation.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <!--Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;600;900&display=swap"
            rel="stylesheet">

        <!--Locomotive-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">

        {{-- Custom Css --}}
        @stack('styles')

        <!--JQuery-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
        <div data-scroll-container class="container-fluid p-0 m-0">
            <header>
                <!--NavBar-->
                <nav class="navbar navbar-expand-md navbar-light shadow-sm fixed-top">
                    <div class="container-fluid p-0">
                        <a class="navbar-brand p-2" href="{{ route('site.home') }}"><img class="logo"
                                src="{{ asset('images/logo.png') }}" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                            aria-controls="navbar" aria-expanded="false">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbar">
                            <ul class="navbar-nav mb-2 mb-md-0">
                                <li class="nav-item">
                                    <a class="nav-link pt-4 link-dark mx-3 hvr" aria-current="page"
                                        href="{{ route('site.home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pt-4 link-dark mx-3 hvr"
                                        href="{{ route('site.brands') }}">Marcas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pt-4 link-dark mx-3 hvr"
                                        href="{{ route('site.service') }}">Produtos e
                                        Serviços</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pt-4 link-dark mx-3 hvr" href="#footer">Fale conosco</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <main>
                @yield('content')
            </main>
            <footer>
                <!--Footer-->
                <section id="footer" class="bg-white border-top" data-scroll-section>
                    <div class="container pt-5 px-5 ">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <p class="mx-3">
                                    <span>
                                        <a class="footer-links px-2" aria-current="page"
                                            href="{{ route('site.home') }}">Início</a> |
                                        <a class="footer-links px-2" href="{{ route('site.terms') }}">Termos de uso</a> |
                                        <a class="footer-links px-2" href="{{ route('site.privacy') }}">Privacidade</a>
                                    </span>
                                </p>
                                <p class="mx-5">
                                    <a href="https://www.facebook.com/group.unika" target="_blank" class="footer-icons">
                                        <i class="fab fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/grupo.unika/" target="_blank" class="footer-icons">
                                        <i class="fab fa-instagram"></i></a>
                                </p>
                                <p class="mx-4 pb-5">
                                    <small>© Grupo Unika {{ date('Y') }}. Todos os direitos reservados.</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </footer>
        </div>
        {{-- Custom Scritps --}}
        @stack('scripts')

        <script type="text/javascript" src="{{ asset('js/web.js') }}"></script>
        <script src="{{ asset('js/progressbar.min.js') }}"></script>

        <!--Masonry-->
        <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
                integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
                async>
        </script>

        <!--Tilt-->
        <script type="text/javascript" src="{{ asset('js/vanilla-tilt.js') }}"></script>

        <script type="text/javascript">
            VanillaTilt.init(document.querySelector(".your-element"), {
                max: 25,
                speed: 400
            });

            VanillaTilt.init(document.querySelectorAll(".your-element"));
        </script>
    </body>
</html>
