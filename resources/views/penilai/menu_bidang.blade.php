<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Fendika Edo Ferdinata">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Bidang Musrenbang</title>

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    {{-- Animated CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    {{-- Favicon --}}
    <link rel="website icon" type="png" href="{{ asset('../img/kab-pacitan.png') }}">

    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">

</head>

<body style="background-color: #2252e1">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area mb-4 mt-4">
            <div class="col-md-6 rounded-4 gap-2 p-3 d-flex justify-content-center align-items-center flex-column left-box animate__animated animate__fadeIn"
                style="background-image: url({{ asset('img/Bappeda5.jpg') }}); background-size: cover">
                <div class="featured-image mb-3">
                    <img src="{{ asset('img/kab-pacitan.png') }}" class="img-fluid animate__animated animate__fadeInUp"
                        style="width: 100px;">
                </div>
                <h1 class="text-white fs-2 mb-1 animate__animated animate__fadeInUp"><b>E-MUSRENBANG</b></h1>

                {{-- <p class="text-white fs-2 mb-1 animate__animated animate__fadeInUp"
                    style="font-family: 'Poppins'; font-weight: 600;">E-Musrenbang</p> --}}
            </div>
            <div class="col-md-6 right-box mt-2 mb-2 animate__animated animate__fadeIn">
                <div class="row">
                    <div class="header-text mb-3 text-black">
                        <h2 class="fw-bold">Bidang Musrenbang</h2>
                        <small>Pilih bidang dibawah ini dan isi skor usulannya.</small>
                    </div>
                    @for ($i = 0; $i < count($bidang); $i++)
                        <div class="col-md-0 mb-2 mt-2 text-center">
                            <div class="card p-3 rounded-4 shadow-lg border-3 border-black">
                                <h3 class="fs-3 fw-600 mb-2 text-black">
                                    {{ $bidang[$i]->nama }}</h3>
                                <a
                                    href="{{ route('usulan.index', ['penilai_id' => $penilai->id, 'bidang' => $bidang[$i]->nama]) }}">
                                    <button type="button"
                                        class="btn btn-warning border-dark border-2 btn-sm px-4 gap-3"><b>Masuk</b></button>
                                </a>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</body>

</html>
