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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;600&display=swap" rel="stylesheet">

    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>
    <header>
        <!--NavBar-->
        <nav class="navbar navbar-expand-md fixed-top bg-white">
            <div class="container-fluid">

                <a class="navbar-brand" href="{{ route('site.home') }}"><img class="logo" src="{{ asset('images/logo.png') }}" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbar">
                    <ul class="navbar-nav mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link pt-4 link-dark" aria-current="page" href="{{ route('site.home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pt-4 link-dark" href="{{ route('site.brands') }}">Marcas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pt-4 link-dark" href="{{ route('site.service') }}">Produtos e Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pt-4 link-dark" href="#footer">Fale conosco</a>
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
        <section id="footer">
            <div class="container-fluid pt-5">
                <div class="row">

                    <div class="col-12 col-md-4 pt-4">
                        <img class="logo-footer pb-2 mx-4" src="{{ asset('images/logo.png') }}" alt="">
                        <p class="mx-4"><small>© Grupo Unika 2021. Todos os direitos reservados.</small></p>
                    </div>

                    <div class="col-12 col-md-4 text-center border-top">
                        <p class="mx-3" style="padding-top: 30%">
                            <span>
                                <a class="footer-links px-2" aria-current="page"
                                    href="{{ route('site.home') }}">Início</a> |
                                <a class="footer-links px-2" href="#">Termos de uso</a> |
                                <a class="footer-links px-2" href="#">Privacidade</a>
                            </span>
                        </p>
                    </div>

                    <div class="col-12 col-md-4 text-end pt-4">
                        <h4 class="pb-3 mx-4">Fale conosco: </h4>
                        <p class="mx-5">
                            <a href="https://www.facebook.com/group.unika" target="_blank" class="footer-icons">
                                <i class="fab fa-facebook"></i></a>
                            <small>grupo.unika</small>
                        </p>
                        <p class="mx-5">
                            <a href="https://www.instagram.com/grupo.unika/" target="_blank" class="footer-icons">
                                <i class="fab fa-instagram"></i></a>
                            <small>grupo.unika</small>
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <script src="{{ asset('js/web.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

        <script>
            AOS.init();
        </script>

</body>

</html>
