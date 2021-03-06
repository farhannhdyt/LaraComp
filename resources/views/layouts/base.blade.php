<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>LARACOMP @yield('title')</title>

        {{-- stylesheets --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <link rel="stylesheet" href="{{ asset('css/hamburgers.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        {{-- Icons --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        {{-- script --}}
        <script src="{{ asset('js/jquery-3.4.1.js') }}"></script>

        {{-- fontawesome --}}
        <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark&display=swap" rel="stylesheet">

        {{-- Custom stylesheets --}}
        @stack('style')

    </head>
    <body>
        {{-- Navigation --}}
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-logo helvetica-bold" href="{{ route('index') }}">LARACOMP</a>
                </div>
                <button class="navbar-toggler hamburger hamburger--squeeze" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item bold">
                            <a class="nav-link" href="{{ route('about') }}">Tentang</a>
                        </li>
                        <li class="nav-item bold">
                            <a class="nav-link" href="{{ route('product') }}">Produk</a>
                        </li>
                        <li class="nav-item bold">
                            <a class="nav-link" href="{{ route('team') }}">Team</a>
                        </li>
                        <li class="nav-item bold">
                            <a class="nav-link" href="{{ route('news') }}">Artikel</a>
                        </li>
                        
                        <li class="nav-item bold item-button2">
                            <a class="btn btn-career" href="{{ route('career') }}">Karir</a>
                        </li>
                        <li class="nav-item bold item-button2">
                            <a class="btn btn-contact" href="{{ route('contact.create') }}">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- END Navigation --}}

        {{-- Jumbotron --}}
        @yield('jumbotron')
        {{-- END Jumbotron --}}

        {{-- content --}}
        <div class="content-wrapper">
            @yield('content')
        </div>
        {{-- END content --}}
        
        {{-- footer --}}
        <footer class="main-footer">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-6 column-company-info">
                        <h1 class="text-white helvetica-bold">LARACOMP</h1>
                        <p>brand usaha kami di bidang IT yang memberikan layanan professional dan dibekali dengan tenaga ahli yang berpengalaman. Info lebih lanjut hubungi kami!</p>
                    </div>
                    <div class="col-md-6 column-company-links">
                        <div class="row">
                            <div class="col-md-4">
                                <h2>Profil</h2>
                                <ul>
                                    <li>
                                        <a class="nav-link" href="{{ route('about') }}">Tentang</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route('product') }}">Produk</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route('team') }}">Team</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-4">
                                <h2>Kegiatan Umum</h2>
                                <ul>
                                    <li>
                                        <a class="nav-link" href="{{ route('news') }}">Artikel</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-4">
                                <h2>Ekstra</h2>
                                <ul>
                                    <li>
                                        <a class="nav-link" href="{{ route('contact.create') }}">Kontak</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route('career') }}">Karir</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="copyright mt-5">
                    <p class="text-center text-white">&copy; <a href="{{ route('index') }}">LARACOMP</a> {{ date('Y') }}</p>
                </div>
            </div>
        </footer>

        {{-- script --}}
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="{{ asset('js/hamburger.js') }}"></script>
        <script src="{{ asset('js/scrollAnimate.js') }}"></script>
        <script src="{{ asset('js/smoothScroll.js') }}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
            AOS.init();
        </script>
        {{-- <script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script> --}}

        {{-- Custom Javascript --}}
        @stack('script')
    </body>
</html>
