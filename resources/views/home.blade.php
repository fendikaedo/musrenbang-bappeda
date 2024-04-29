<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <title>MUSRENBANG</title>
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <i class="fa-solid fa-font-awesome"></i>
            <a href="#">Musrenbang</a>
        </div>
        <div class="menu">
            <div class="menu-links">
                <a href="#">Home</a>
                <a href="https://bappedalitbang.pacitankab.go.id/">About</a>
                <a href="#">Contact</a>
            </div>
            <button class="log-in"><a href="{{route('admin.auth.logs.index')}}">Login</a></button>
            {{-- <button class="log-in"><a href="https://forms.gle/cYDAeztUvyJGDuuSA">Login User</a></button> --}}
        </div>
        <div class="menu-btn">
            <i class="fa-solid fa-bars"></i>
        </div>
    </nav>

    <footer>
        <div class="heading">
            <h2> <i class="b1-globe-americans"></i> Musrenbang </h2>
        </div>
        <div class="menus">
            <ul>
                <li class="title">Our Company</li>
                <li>Portofolio</li>
                <li>Blog</li>
                <li>Resume</li>
            </ul>
            <ul>
                <li class="title">Resources</li>
                <li>Github</li>
                <li>Dribble</li>
                <li>npm</li>

            </ul>
            <div class="info">
                <span class="title">About us</span>
                <p>Musrenbang (Musyawarah Perencanaan Pembangunan).Membahas dan menyepakati usulan rencana pembangunan desa/kelurahan menjadi kegiatan prioritas pembangunan di wilayah kecamatan yang bersangkutan.
                </p>
                <div class="social">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
