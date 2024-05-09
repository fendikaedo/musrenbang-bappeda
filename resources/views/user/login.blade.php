<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Muhamad Nauval Azhar">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="This is a login page template based on Bootstrap 5">
    <title>Masuk Vote Musrenbang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    {{-- Favicon --}}
    <link rel="website icon" type="png" href="{{ asset('../img/kab-pacitan.png') }}">

    {{-- Animated CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body class="bg-primary">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="card shadow-lg mt-5">
                        <div class="card-body p-5">
                            <div class="animate__animated animate__fadeInDown">
                                <div class="text-center my-4">
                                    <img src="../../img/kab-pacitan.png" alt="logo" width="75">
                                </div>
                                <div class="text-center my-4">
                                    <h1><b>E-MUSRENBANG</b></h1>
                                </div>
                            </div>
                            <h1 class="fs-4 card-title mb-4 text-center animate__animated animate__fadeIn">Data Penilai
                                Vote</h1>
                            <form method="POST" class="needs-validation animate__animated animate__fadeIn"
                                novalidate="" autocomplete="off">
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="nama_penilai">Nama Lengkap</label>
                                    <input id="nama_penilai" type="text" class="form-control" name="nama_penilai"
                                        value="" required autofocus>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="alamat_penilai">Alamat</label>
                                    <input id="alamat_penilai" type="text" class="form-control" name="alamat_penilai"
                                        value="" required autofocus>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="tlp_penilai">No Telp</label>
                                    <input id="tlp_penilai" type="number" class="form-control" name="tlp_penilai"
                                        value="" required autofocus>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">E-Mail </label>
                                    <input id="email" type="email" class="form-control" name="email"
                                        value="" required autofocus>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="tanggal">Tanggal</label>
                                    <input id="tanggal" type="date" class="form-control" name="tanggal"
                                        value="" required autofocus>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="kegiatan_id">Token Kegiatan</label>
                                    <input id="kegiatan_id" type="text" class="form-control" name="kegiatan_id"
                                        value="" required autofocus>
                                </div>

                                <div class="d-flex align-items-center">
                                    <a href="/">
                                        <button type="button"
                                            class="btn btn-primary btn-lg px-4 gap-3">Kembali</button>
                                    </a>
                                    <button type="submit" class="btn btn-lg btn-success ms-auto">
                                        Selanjutnya
                                    </button>
                                </div>
                            </form>
                        </div>
                        {{-- <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                Don't have an account? <a href="register.html" class="text-dark">Create One</a>
                            </div>
                        </div> --}}
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
