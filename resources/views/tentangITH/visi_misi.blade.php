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
    <style>
        main div p {
            font-family: 'roboto', sans-serif;
        }

        @media (max-width:768px) {

            .side-table {
                display: none;
            }
        }

        .hero-docs {
            margin-top: 6rem;
        }

        @media (max-width:768px) {

            .side-table {
                display: none;
            }
        }

        @media(min-width:769px) and (max-width:992px) {

            .hero-docs {
                margin-top: 2rem;
            }
        }

        @media(min-width:508px) and (max-width:767px) {
            .hero-docs {
                margin-top: 8rem;
            }
        }

        @media (max-width:336px) {
            .hero-docs {
                margin-top: 4.2rem;
            }

            .table-profil img {
                width: 12rem;
            }
        }
    </style>
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
    <div class="hero-docs text-center align" style="">
        <div class="hero-text"
            style="background-color: rgba(0, 0, 0, 0.8);background-position:center;background-image:url({{ asset('assets/img/new_university.svg') }}); padding:2rem 1.5rem 2rem .5rem;color:white;">
            <h1>Visi & Misi</h1>
            <p>Tentang ITH / Visi & Misi</p>
        </div>
    </div>
    <main class="main-table container d-flex" style="gap:5rem;">
        <div class="table-profil" style="text-align: justify; border-top:3px solid #F18516;padding:1rem;">
            <h1>Visi :</h1>
            <p style="padding-left: 50px;">“Unggul dalam Ilmu Pengetahuan dan Teknologi berbasis inovasi benua maritim
                Indonesia”</p>
            <h1>Misi :</h1>
            <p style="padding-left: 50px;">1. Menyelenggarakan pendidikan tinggi yang unggul berbasis kompetensi untuk
                menghasilkan lulusan yang memiliki nilai-nilai entrepreneurship, berkarakter, beradab dan berdaya saing
                tinggi pada level nasional dan internasional;</p>
            <p style="padding-left: 50px;">2. Menyelenggarakan penelitian dan pengabdian kepada masyarakat yang unggul,
                inovatif,
                dan berkualitas tinggi yang bermanfaat bagi masyarakat secara berkelanjutan dalam mendukung pembangunan
                daerah dan nasional;</p>
            <p style="padding-left: 50px;">3. Menyelengarakan pendidikan teknologi yang berkualitas.3. Mengembangkan
                infrastruktur sarana dan prasarana yang unggul dalam menunjang pelaksanaan tridharma perguruan tinggi
            </p>
            <p style="padding-left: 50px;">4. Terciptanya manajemen yang handal untuk tatakelola transparan dan
                terpercaya.4. Mengembangkan jaringan kerjasama institusional yang unggul dalam rangka mengembangkan
                temuan ilmu pengetahuan dan teknologi yang berkelanjutan;</p>
            <p style="padding-left: 50px;">5. Melakukan Pembinaan sumberdaya manusia yang berkesinambungan dalam
                menunjang pengembangan profesionalisme.Menyelenggarakan manajemen tata kelola pendidikan tinggi yang
                unggul berlandaskan karakter (character), integritas (integrity), nasionalisme (nationalism), teknologi
                (technology), dan adaptif (adaptive) disingkat CINTA;</p>
            <p style="padding-left: 50px;"> 6. Karakter (character) sebagaimana yang dimaksud pada angka 5 tentang
                kepribadian seseorang yang memiliki integritas, kejujuran, etika, dan sifat-sifat moral yang kuat;</p>
            <p style="padding-left: 50px">7. Integritas (Integrity) sebagaimana yang dimaksudkan pada angka 5 tentang
                konsistensi dan keselarasan antara perkataan dan perbuatan yang menghormati nilai-nilai moral dan etika
                dalam setiap tindakan yang diputuskan</p>
            <p style="padding-left: 50px">8.Nationalisme (nationalism) sebagaimana yang dimaksud pada angka 5 tentang
                rasa
                cinta dan kesetiaan terhadap bangsa dan negara yang mencakup rasa kebanggaan terhadap budaya, sejarah,
                dan identitas nasional serta komitmen untuk memmajukan kepentingan dan kesejahteraan negara;</p>
            <p style="padding-left: 50px">9. Teknologi (Technology) sebagaimana alat yang dimaksudkan pada angka 5
                tentang perkembangan dan penggunaan alat, pengetahuan dan keterampilan dalam menciptakan barang dan api
                jasa yang menhadapi tantangan zaman</p>
            <p style="padding-left:50px">10. Adaptif (adaptive) sebagaimana yang dimaksudkan pada angka 5 tentang kemampuan
                yang beradaptasi dengan perubahan lingkungan dalam menghadapi perubahan yang terjadi di masyarakat dan
                perkembangan teknologi</p>
        </div>

        {{-- TODO: Fetch datanya dari DB --}}
        <div class="side-table" style="width:30%; font-family:Fira Sans, sans;">
            <p
                style="font-size:2rem; padding:.5rem; font-size:1.5rem; color:white;background-color: hsl(197deg 81% 16%);border-radius:2px; ">
                <i class="bi bi-chevron-left"></i>
                Tentang ITH
            </p>
            <nav>
                <ul>
                    @foreach ($navbarmenu->whereIn('ops1', 1)->sortBy('order') as $loop1)
                        <p>
                            <a style="color:black;" href="{{ route('showNav', ['tentang-ith', $loop1->slug]) }}">
                                <i class="bi bi-chevron-right"></i>
                                {{ $loop1->indtitle }}
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
