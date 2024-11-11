<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sewa Mobil &mdash; Free Website Template by Colorlib</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('frontend/fonts/icomoon/style.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.fancybox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/fonts/flaticon/font/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}" />

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
</head>

<body>
    <div class="site-wrap" id="home-section">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar site-navbar-target" role="banner">
            <div class="container">
                <div class="row align-items-center position-relative">
                    <div class="col-3">
                        <div class="site-logo">
                            <a href="{{ url('/') }}"><strong>Sewa Mobil</strong></a>
                        </div>
                    </div>

                    <div class="col-9 text-right">
                        <span class="d-inline-block d-lg-none"><a href="#"
                                class="site-menu-toggle js-menu-toggle py-5"><span
                                    class="icon-menu h3 text-black"></span></a></span>

                        <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto">
                                <li class="active">
                                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                                </li>
                                <li><a href="{{ url('daftar-mobil') }}" class="nav-link">Daftar Mobil</a></li>
                                </li>
                                <li><a href="{{ url('blog') }}" class="nav-link">Blog</a></li>
                                <li><a href="{{ url('tentang-kami') }}" class="nav-link">Tentang Kami</a></li>
                                <li><a href="{{ url('kontak') }}" class="nav-link">Kontak</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        <div class="site-section bg-primary py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-4 mb-md-0">
                        <h2 class="mb-0 text-white">Siap Menjelajah? Waktunya Sewa Mobil Impianmu!</h2>
                        <p class="mb-0 opa-7">
                            Nikmati perjalananmu sekarang juga dengan harga terbaik sebelum ada perubahan!
                        </p>
                    </div>
                    <div class="col-lg-5 text-md-right">
                        <a href="#" class="btn btn-primary btn-white">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

        <footer class="site-footer bg-white text-dark py-5">
            <div class="container text-center">
                <!-- Judul Menarik -->
                <h2 class="footer-heading mb-4">Temukan Mobil Impian Anda</h2>

                <!-- Menu Navigasi -->
                <nav class="border-bottom border-primary">
                    <ul class="list-unstyled d-flex justify-content-center mb-4">
                        <li class="mx-3"><a href="{{ url('/') }}"
                                class="text-dark text-decoration-none">Home</a></li>
                        <li class="mx-3"><a href="{{ url('/daftar-mobil') }}"
                                class="text-dark text-decoration-none">Daftar Mobil</a>
                        </li>
                        <li class="mx-3"><a href="{{ url('/blog') }}"
                                class="text-dark text-decoration-none">Blog</a></li>
                        <li class="mx-3"><a href="{{ url('/tentang-kami') }}"
                                class="text-dark text-decoration-none">Tentang Kami</a>
                        </li>
                        <li class="mx-3"><a href="{{ url('/kontak') }}"
                                class="text-dark text-decoration-none">Kontak</a></li>
                    </ul>
                </nav>

                <!-- Keterangan Copyright -->
                <div class=" pt-3">
                    <p class="mb-0">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Hak Cipta Terpelihara |
                        Dibuat dengan <i class="icon-heart text-danger"></i> oleh
                        <a href="https://colorlib.com" target="_blank"
                            class="text-dark text-decoration-none">Colorlib</a>
                    </p>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('frontend/js/aos.js') }}"></script>

    <script src="{{ asset('frontend/js/main.js') }}"></script>
    @stack('script-alt')
</body>

</html>
