<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    {{-- Font Awesome Icons --}}
    <script src="https://kit.fontawesome.com/17b39fa33f.js" crossorigin="anonymous"></script>

    {{-- Animated CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    {{-- CSS External --}}
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    {{-- Favicon --}}
    <link rel="website icon" type="png" href="{{ asset('../img/kab-pacitan.png') }}">

    <title>E-Musrenbang</title>
</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header animate__animated animate__fadeInDown">
        <nav class="nav container">
            <div class="nav__data">
                <a href="#" class="nav__logo">
                    BAPPEDA LITBANG PACITAN
                </a>
                <div class="nav__toggle" id="nav-toggle">
                    <i class="fa-solid fa-bars nav__burger"></i>
                    <i class="fa-solid fa-xmark nav__close"></i>
                </div>
            </div>
            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li><a href="#" class="nav__link">Home</a></li>

                    <li><a href="https://bappedalitbang.pacitankab.go.id/" target="_blank" class="nav__link">About</a></li>

                    <li><a href="#" class="nav__link">Contact</a></li>

                    <li class="dropdown__item">
                        <a href="/admin" class="nav__link">
                            Admin <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </a>

                        {{-- <ul class="dropdown__menu">
                            <li>
                                <a href="/admin" class="dropdown__link">
                                    <i class="ri-pie-chart-line"></i> Login
                                </a>
                            </li>
                        </ul> --}}
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!--=============== HERO ===============-->
    <main class="main">
        <div class="px-2 text-center text-white">
            <img class="d-block mx-auto mb-4 animate__animated animate__fadeInUp"
                src="{{ asset('../img/kab-pacitan.png') }}" alt="" width="80" height="88">
            <h1 class="display-5 fw-bold animate__animated animate__fadeIn">E-MUSRENBANG</h1>
            <h2 class="display-5 fw-bold animate__animated animate__fadeIn">Musyawarah Rencana Pembangunan</h2>
            <div class="col-lg-6 mx-auto animate__animated animate__fadeIn">
                <p class="lead mb-4">Aplikasi E-Musrenbang adalah forum antarpelaku dalam rangka menyusun rencana pembangunan
                    Nasional dan rencana pembangunan Daerah yang menggunakan sistem voting melalui skor.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="/loginpenilai">
                        <button type="button"
                            class="btn btn-primary btn-lg px-4 gap-3 animate__animated animate__fadeInUp">Start
                            Vote</button>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <!--=============== FOOTER ===============-->
    <footer class="bg-body-tertiary text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3 bg-dark text-white">
            © 2024 BAPPEDA LITBANG Kab. Pacitan
        </div>
        <!-- Copyright -->
    </footer>

</body>

<script>
    /*=============== SHOW MENU ===============*/
    const showMenu = (toggleId, navId) => {
        const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId)

        toggle.addEventListener('click', () => {
            // Add show-menu class to nav menu
            nav.classList.toggle('show-menu')

            // Add show-icon to show and hide the menu icon
            toggle.classList.toggle('show-icon')
        })
    }

    showMenu('nav-toggle', 'nav-menu')
</script>

</html>
