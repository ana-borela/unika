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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <div class="collapse navbar-collapse justify-content-start" id="navbar">
                <div class="navbar-nav">
                    <a class="nav-link py-0 px-3" aria-current="page"
                    href="{{ route('site.home') }}">Home</a>
                    <a class="nav-link py-0 px-3" href="{{ route('site.brands') }}">Marcas</a>
                    <a class="nav-link py-0 px-3" href="{{ route('site.service') }}">Produtos e Serviços</a>
                    <a class="nav-link py-0" href="#footer">Fale conosco</a>
                </div>
              </div>
              <a class="navbar-brand" href="{{ route('site.home') }}"><img class="logo" src="{{ asset('images/logo.png') }}" alt="Logo"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
        </nav>

    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!--Footer-->
        <section id="footer">
            <div class="footer container-fluid text-light">
                <div class="row">
                    <div class="col-12 col-md-6 text-center">
                        <h3 class="pb-5">Siga-nos</h3>
                        <a class="footer-icons" href="https://www.facebook.com/group.unika" target="_blank"><i class="pb-5 fab fa-facebook fa-2x"></i></a>
                        <a class="footer-icons" href="https://www.instagram.com/grupo.unika/" target="_blank"><i class="pb-5 fab fa-instagram fa-2x"></i></a>
                    </div>
                    <div class="col-12 col-md-6">
                        <p class="text-center">+55 34 3321.9911</p>
                        <p class="text-center">contato@gunika.co</p>
                    </div>
                </div> 
            </div>

            <div class="container-fluid bg-light">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <span>lipsun dolor</span>
                    </div>
                </div>
            </div>

        </section>
    </footer>
    <script src="{{ asset('js/web.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
