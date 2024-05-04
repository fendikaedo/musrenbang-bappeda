<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="website icon" type="png" href="{{ asset('../img/kab-pacitan.png') }}">

    <title>MUSRENBANG</title>
</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="#" class="nav__logo">
                    <i class="ri-planet-line"></i> BAPPEDA LITBANG PACITAN
                </a>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__burger"></i>
                    <i class="ri-close-line nav__close"></i>
                </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li><a href="#" class="nav__link">Home</a></li>

                    <li><a href="#" class="nav__link">About</a></li>

                    <li><a href="#" class="nav__link">Contact</a></li>
                    <li class="dropdown__item">
                        <div class="nav__link">
                            Admin <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <ul class="dropdown__menu">
                            <li>
                                <a href="{{route('admin.auth.logs.index')}}" class="dropdown__link">
                                    <i class="ri-pie-chart-line"></i> Login
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- <li>

                    </li> --}}
                </ul>
            </div>
        </nav>
    </header>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('../js/home.js') }}"></script>

    <main class="main">
        <div class="px-2 text-center">
            <img class="d-block mx-auto mb-4" src="{{ asset('../img/kab-pacitan.png') }}" alt="" width="72"
                height="80">
            <h1 class="display-5 fw-bold">MUSRENBANG</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the
                    world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive
                    grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Start Score</button>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
