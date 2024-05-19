<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Muhamad Nauval Azhar">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="This is a login page template based on Bootstrap 5">
    <title>Form Usulan Musrenbang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    {{-- Favicon --}}
    <link rel="website icon" type="png" href="{{ asset('../img/kab-pacitan.png') }}">

    {{-- Animated CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    {{-- API Google Maps --}}
    <script src="http://maps.googleapis.com/maps/api/js"></script>

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
                                    <img src="../../img/kab-pacitan.png" alt="logo" width="75">
                                </div>
                                <div class="text-center my-4">
                                    <h1><b>E-MUSRENBANG</b></h1>
                                </div>
                            </div>
                            <h1 class="fs-4 card-title mb-4 text-center animate__animated animate__fadeIn">
                                @yield('judul')
                            </h1>
                            @yield('form')

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
<script>
    // fungsi initialize untuk mempersiapkan peta
    function initialize() {
        var propertiPeta = {
            center: new google.maps.LatLng(-8.186871002089708, 111.0885649428222),
            zoom: 18,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(-8.186871002089708, 111.0885649428222),
            map: peta,
            animation: google.maps.Animation.BOUNCE
        });
    }

    // event jendela di-load
    google.maps.event.addDomListener(window, 'load', initialize);
</script>

</html>
