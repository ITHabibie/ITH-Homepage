<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ITH</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('storage') }}/{{ $contact->logo }}" rel="icon">
    {{-- <link href="{{asset('assets')}}/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}



    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">

    @livewireStyles
    @include('style')

    <!-- Vendor CSS Files -->
    {{-- <link href="{{asset('assets')}}/vendor/aos/aos.css" rel="stylesheet"> --}}
    <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">

    <script></script>
    <!-- =======================================================
  * Template Name: BizLand - v3.6.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>
    @php
        $language = __('cek.lang');
        $flatTOPbanner = $top->alt3 ?? 'null';
        $flatMIDbanner = $mid->alt3 ?? 'null';
        $flatBOTbanner = $bottom->alt3 ?? 'null';
    @endphp
    @if ($page->top_bar == 1)
        <!-- ======= Top Bar ======= -->
        {{-- @include('layouts.topbar') --}}
    @endif
    @include('layouts.header')
    <div class="hero-docs text-center align" style="margin-top: 6.2rem; ">
        <div class="hero-text"
            style="background-color: rgba(0, 0, 0, 0.8);background-position:center;background-image:url({{ asset('assets/img/new_university.svg') }}); padding:2rem 1.5rem 2rem .5rem;color:white;">
            <h1>Hymne & Mars</h1>
            <p>Tentang ITH / Hymne & Mars</p>
        </div>
    </div>

    <main class="main-table container d-flex" style="gap:2rem;">
        <div class="table-profil scroller" style="text-align: justify; scrollbar-color: rgb(239, 164, 44) #dedede;">
            <p>Institut Teknologi Bacharuddin Jusuf Habibie memiliki Lagu Hymne dan Mars yang masih digunakan hingga saat ini. Berikut lirik lagu hymne dan Mars ITH :</p>
            <br>
            <h2>Hymne ITH</h2>
            <br>
            <div>
                <img src="{{asset('assets\img\hymne.png')}}" align="right" style="width: 20rem; height: 12.5rem; padding-top: 0.625rem; padding-right: 0.625rem; padding-bottom: 1.25rem;" alt="hymne">
            </div>
            <div style="width: 30rem; height: 18.75rem; overflow: auto;">
                <p>Bapak teknologi bangsa</p>
                <p>Menjadi panutan bersama</p>
                <p>Sebagai patriot teknoktrat bangsa</p>
                <p>Kembangkan teknologi dengan makna cinta</p>
                <br>
                <p>Almamater ITH tercinta</p>
                <p>Di tanganmulah kebangkitan bangsa</p>
                <p>Cita-cita mulia</p>
                <p>Membangun peradaban jaya</p>
                <br>
                <p>Institut teknologi B.J Habibie</p>
                <p>Dari kota cinta membangun bakti</p>
                <p>Menyatukan ilmu dan amal</p>
                <p>Demi kejayaan bersama</p>
                <br>
                <p>Institut Teknologi B.J Habibie</p>
                <p>Bersamamu kami mengabdi</p>
                <p>Institut Teknologi B.J Habibie</p>
                <p>Bersamamu kami berbakti</p>
            </div>
            <br><br>
            <h2>Mars ITH</h2>
            <br>
            <div>
                <img src="{{asset('assets\img\mars.png')}}" align="right" style="width: 20rem; height: 12.5rem; padding-top: 0.625rem; padding-right: 0.625rem; padding-bottom: 1.25rem;" alt="mars">
            </div>
            <div style="width: 30rem; height: 18.75rem; overflow: auto;">
                <p>Institut Teknologi B.J Habibie</p>
                <p>Menjunjung tinggi martabat kemanusiaan</p>
                <p>Berwawasan lingkungan berjiwa enterpteneur</p>
                <p>Berlandaskan cinta membangun nusa bangsa</p>
                <br>
                <p>Institut Teknologi B.J Habibie</p>
                <p>Kembangkan jiwa teknologi dengan cinta</p>
                <p>Mewujudkan semangat B.J Habibie</p>
                <p>Bapak teknologi bangsa</p>
                <br>
                <p>Menghasilkan lulusan unggul dan inovatif</p>
                <p>Berkarakter dan beradab</p>
                <p>Hasilkan karya nyata ilmu pengetahuan</p>
                <p>Bermanfaat bagi nusa dan bangsa</p>
                <br>
                <p>Jayalah... ITH</p>
                <p>Kembangkan ilmu dan teknologi</p>
                <p>Majulah... ITH</p>
                <p>Jadi kebanggaan Indonesia</p>
                <p>Institut Teknologi B.J Habibie</p>
            </div>
        </div>

        {{-- TODO: Fetch datanya dari DB --}}
        <div class="side-table" style="width:30%; font-family:Fira Sans, sans;">
            <p style="font-size:2rem; padding:.5rem; font-size:1.5rem; color:white;background-color: hsl(197deg 81% 16%);border-radius:2px; ">
                <i class="bi bi-chevron-left"></i>
                Tentang ITH
            </p>
            <nav>
                <ul>
                    @foreach ($navbarmenu->whereIn('ops1', 1)->sortBy('order') as $loop1)
                    <p >
                        <a style="color:black;" href="{{route('showNav', ['tentang-ith', $loop1->slug])}}">
                            <i class="bi bi-chevron-right"></i>
                                {{$loop1->indtitle}}
                            </a>
                        </p>
                    @endforeach
                </ul>
            </nav>
        </div>
    </main>

    @include('layouts.footer')
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"
        style="background: {{ $page->alt1 }}"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('assets') }}/vendor/purecounter/purecounter.js"></script>
    <script src="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets') }}/js/main.js" type="module"></script>
    @livewireScripts
</body>

</html>
