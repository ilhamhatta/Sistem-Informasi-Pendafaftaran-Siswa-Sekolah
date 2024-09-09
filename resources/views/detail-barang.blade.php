<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Detail Barang | Nurli-app</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" href="/assets/img/logo.png">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
                <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
            </div>
            <div class="social-links d-none d-md-block">
                <a href="https://web.facebook.com/ilhamwoles07" target="_blank" class="facebook"><i
                        class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/_ilham.hat/" target="_blank" class="instagram"><i
                        class="bi bi-instagram"></i></a>
                <a href="https://linkedin.com/in/m-ilham-hatta-a3535a257" target="_blank" class="linkedin"><i
                        class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="/">AN App</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="/">Home</a></li>
                    <li><a class="nav-link scrollto" href="/">Profil</a></li>
                    <li><a class="nav-link scrollto active" href="/">Barang</a></li>
                    <li><a class="nav-link scrollto" href="/">Pricing</a></li>
                    <li><a class="nav-link scrollto" href="/">Team</a></li>
                    <li><a class="nav-link scrollto" href="/">Kontak</a></li>
                    @auth
                    <li><a class="btn-danger" href="/dashboard">Login</a></li>
                    @else
                    <li><a class="btn-danger" href="/login">Login</a></li>
                    @endauth
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section class="detail-baju">
            <div class="container">
                <div class="section-title mb-0">
                    <span>Detail Baju</span>
                    <h2>Detail Baju</h2>
                </div>

                <div class="row mt-0">
                    <div class="col-12">
                        <div class="card border-0 shadow my-5 py-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-6 text-center">
                                        <img class="w-100 rounded border-radius-lg shadow-lg mx-auto"
                                            src="{{ asset('storage/' . $posts->image) }}" alt="{{ $posts->image }}">
                                    </div>
                                    <div class="col-lg-5 mx-auto">
                                        <h3 class="mt-lg-0 mt-4">{{ $posts->nama_baju }}</h3>
                                        <div class="rating">
                                            <h5 class="text-secondary">{{ $posts->category->kategori_baju }}</h5>
                                        </div>
                                        <h6 class="mb-0 mt-3">Harga</h6>
                                        <h5>Rp {{ $posts->harga }}</h5>
                                        <i class="bi bi-circle-fill me-1" style="color:#4185f4"></i>
                                        <i class="bi bi-circle-fill me-1" style="color: #ea4235"></i>
                                        <i class="bi bi-circle-fill me-1" style="color:#fabc05"></i>
                                        <i class="bi bi-circle-fill me-1" style="color: #34a853"></i>
                                        <br>
                                        <label class="mt-0">Deskripsi</label>
                                        <ul>
                                            <p class="text-dark">
                                                {!! $posts->deskripsi !!}
                                            </p>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('komponen.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>

</body>

</html>
