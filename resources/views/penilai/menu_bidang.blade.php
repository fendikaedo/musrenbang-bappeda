<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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

</head>
<style>
    .card {
        border-radius: 14px
    }

    .card-body {
        border-radius: 14px
    }
</style>

<body class="bg-primary">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9 mb-5 mt-5">
                    <div class="card m-2 shadow-lg">
                        <div class="card-body">
                            <div class="animate__animated animate__fadeInDown">
                                <div class="text-center my-4">
                                    <img src="../../img/kab-pacitan.png" alt="logo" width="75">
                                </div>
                                <div class="text-center my-4 text-black">
                                    <h1><b>E-MUSRENBANG</b></h1>
                                </div>
                            </div>
                            <h1 class="fs-4 card-title mb-4 text-center animate__animated animate__fadeIn">
                                Menu Bidang
                            </h1>
                            <div class="content">
                                @for ($i = 0; $i < count($bidang); $i++)
                                    <div
                                        class="card border-2 border-dark shadow-lg mb-3 m-3 animate__animated animate__fadeInLeft">
                                        <div class="card-body p-5 text-center">
                                            <h1 class="fs-2 card-title fw-bold mb-4 text-black">
                                                {{ $bidang[$i]->nama }}</h1>
                                            <a
                                                href="{{ route('usulan.index', ['penilai_id' => $penilai->id, 'bidang' => $bidang[$i]->nama]) }}">
                                                <button type="button"
                                                    class="btn btn-primary border-dark border-2 btn-sm px-4 gap-3"><b>Masuk</b></button>
                                            </a>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
