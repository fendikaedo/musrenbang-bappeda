<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Fendika Edo Ferdinata">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="This is a login page template based on Bootstrap 5">
    <title>Usulan Bidang Musrenbang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    {{-- Font Awesome Icons --}}
    <script src="https://kit.fontawesome.com/17b39fa33f.js" crossorigin="anonymous"></script>

    {{-- Favicon --}}
    <link rel="website icon" type="png" href="{{ asset('../img/kab-pacitan.png') }}">

    {{-- Animated CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="{{ asset('css/usulan.css') }}">
</head>
<style>
    .rounded-5 {
        border-radius: 30px
    }

    .card-body {
        border-radius: 14px
    }
</style>

<body style="background-color: #2252e1">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-md-9 col-sm-11 mb-4 mt-4">
                    <div class="card shadow-lg m-2 rounded-5">
                        <div class="card-body p-4">
                            <div class="rounded-4 p-4 animate__animated animate__fadeInDown" style="background-image: url({{ asset('img/Bappeda3.jpg') }}); background-size: cover;">
                                <div class="text-center my-4">
                                    <img src="{{asset('img/kab-pacitan.png')}}" alt="logo" width="75">
                                </div>
                                <div class="text-center text-white my-4">
                                    <h1><b>E-MUSRENBANG</b></h1>
                                </div>
                            </div>
                            <h1 class="fs-4 card-title mt-4 mb-4 text-center animate__animated animate__fadeInUp">
                                @yield('judul')
                            </h1>
                            @yield('content')

                        </div>
                        <div class="m-4">
                            <a href="{{ route('menubidang.index', ['penilai_id' => $penilai]) }}">
                                <button class="btn btn-md btn-primary fw-bold"><i class="fa-solid fa-circle-left"></i> Kembali</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
