<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Fendika Edo Ferdinata">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="This is a login page template based on Bootstrap 5">
    <title>Form Usulan Musrenbang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    {{-- Font Awesome Icons --}}
    <script src="https://kit.fontawesome.com/17b39fa33f.js" crossorigin="anonymous"></script>

    {{-- Favicon --}}
    <link rel="website icon" type="png" href="{{ asset('../img/kab-pacitan.png') }}">

    {{-- Animated CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body class="bg-primary">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-9 col-sm-11">
                    <div class="card shadow-lg mt-5 m-2">
                        <div class="card-body p-4">
                            <div class="animate__animated animate__fadeInDown">
                                <div class="text-center my-4">
                                    <img src="{{asset('img/kab-pacitan.png')}}" alt="logo" width="75">
                                </div>
                                <div class="text-center my-4">
                                    <h1><b>E-MUSRENBANG</b></h1>
                                </div>
                            </div>
                            <h1 class="fs-4 card-title mb-4 text-center animate__animated animate__fadeInUp">
                                @yield('judul')
                            </h1>
                            @yield('list')

                        </div>
                        {{-- <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                Don't have an account? <a href="register.html" class="text-dark">Create One</a>
                            </div>
                        </div> --}}
                        <div class="m-4">
                            <a href="{{ route('menubidang.index', ['penilai_id' => $penilai]) }}">
                                <button class="btn btn-md btn-primary">Kembali</button>
                            </a>
                        </div>
                    </div>

                    <div class="text-center mt-5 text-white">
                        <h6>Copyright &copy; 2024 &mdash; BAPPEDA LITBANG</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
