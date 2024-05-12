<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Bidang</title>

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
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="animate__animated animate__fadeInDown">
                        <div class="text-center my-4">
                            <img src="../../img/kab-pacitan.png" alt="logo" width="75">
                        </div>
                        <div class="text-center my-4 text-black">
                            <h1><b>E-MUSRENBANG</b></h1>
                        </div>
                    </div>


                    <div class="content animate__animated animate__fadeInUp">
                        <div class="card shadow-lg mb-3">
                            <div class="card-body p-5">
                                <h1 class="fs-4 card-title fw-bold mb-4 text-black">Bidang Infrastruktur</h1>
                                <a href="/forminfrastruktur">
                                    <button type="button" class="btn btn-success btn-sm px-4 gap-3">Masuk</button>
                                </a>
                            </div>
                        </div>
                        <div class="card shadow-lg mb-3">
                            <div class="card-body p-5">
                                <h1 class="fs-4 card-title fw-bold mb-4 text-black">Bidang Ekonomi</h1>
                                <a href="/formekonomi">
                                    <button type="button" class="btn btn-success btn-sm px-4 gap-3">Masuk</button>
                                </a>
                            </div>
                        </div>
                        <div class="card shadow-lg mb-3">
                            <div class="card-body p-5">
                                <h1 class="fs-4 card-title fw-bold mb-4 text-black">Bidang Sosial Budaya</h1>
                                <a href="/formsosbud">
                                    <button type="button" class="btn btn-success btn-sm px-4 gap-3">Masuk</button>
                                </a>
                            </div>
                        </div>
                        <div class="my-4">
                            <a href="/loginpenilai">
                                <button type="button" class="btn btn-dark btn-lg">Kembali</button>
                            </a>
                        </div>
                    </div>
                    <div class="text-center mt-5 text-muted">
                        <h6 class="text-white">Copyright &copy; 2024 &mdash; BAPPEDA LITBANG</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
