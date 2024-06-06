<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Fendika Edo Ferdinata">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Masuk Vote Musrenbang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    {{-- Favicon --}}
    <link rel="website icon" type="png" href="{{ asset('../img/kab-pacitan.png') }}">

    {{-- Animated CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body style="background-color: #2252e1">
    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!----------------------- Login Container -------------------------->

        <div class="row border rounded-5 p-3 bg-white shadow-lg box-area mt-4 mb-4">

            <!--------------------------- Left Box ----------------------------->

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box animate__animated animate__fadeIn"
                style="background-image: url({{ asset('img/Bappeda5.jpg') }}); background-size: cover">

                <div class="featured-image mb-3">
                    <img src="{{ asset('img/kab-pacitan.png') }}" class="img-fluid animate__animated animate__fadeInUp"
                        style="width: 100px;">
                </div>
                <p class="text-white fs-2 mb-1 animate__animated animate__fadeInUp"
                    style="font-family: 'Poppins'; font-weight: 600;">E-Musrenbang</p>
            </div>

            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-6 right-box animate__animated animate__fadeIn">
                <div class="row align-items-center">
                    <div class="header-text mb-3">
                        <h2 class="fw-bold">Masuk Vote Musrenbang</h2>
                        <small>Lengkapi data pada form dibawah ini.</small>
                    </div>
                    <form action="{{ route('loginpenilai.store') }}" method="POST"
                        class="needs-validation animate__animated animate__fadeIn p-3" novalidate=""
                        autocomplete="off">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_penilai" class="form-label fs-6">Nama Lengkap</label>
                            <input id="nama_penilai" type="text" class="form-control form-control-lg bg-light fs-6"
                                name="nama_penilai" value="{{ old('nama_penilai') }}" placeholder="Masukkan nama lengkap"
                                required autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="alamat_penilai" class="form-label fs-6">Alamat</label>
                            <input id="alamat_penilai" type="text" class="form-control form-control-lg bg-light fs-6"
                                name="alamat_penilai" value="{{ old('alamat_penilai') }}" placeholder="Masukkan alamat" required
                                autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="tlp_penilai" class="form-label fs-6">No. Telp</label>
                            <input id="tlp_penilai" type="number" class="form-control form-control-lg bg-light fs-6"
                                name="tlp_penilai" value="{{ old('tlp_penilai') }}" placeholder="Masukkan No. Telp" required
                                autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="email_penilai" class="form-label fs-6">Email</label>
                            <input id="email_penilai" type="email" class="form-control form-control-lg bg-light fs-6"
                                name="email_penilai" value="{{ old('email_penilai') }}" placeholder="Masukkan email" required
                                autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal" class="form-label fs-6">Hari/Tanggal</label>
                            <input id="tanggal" type="date" class="form-control form-control-lg bg-light fs-6"
                                name="tanggal" value="{{ old('tanggal') }}" required autofocus>
                        </div>

                        <div class="mb-4">
                            <label for="kegiatan_id" class="form-label fs-6">Token Kegiatan</label>
                            <select class="form-select bg-light fs-6" name="kegiatan_id" id="kegiatan_id">
                                @foreach ($token_kegiatan as $token)
                                    <option value="" disabled selected>Pilih Kegiatan</option>
                                    <option value="{{ $token->id }}">{{ $token->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-flex align-items-center">
                            <a href="/">
                                <button type="button" class="btn btn-primary btn-lg fw-bold fs-6">Kembali</button>
                            </a>
                            <button type="submit" class="btn btn-lg btn-success ms-auto fw-bold fs-6">
                                Masuk
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
