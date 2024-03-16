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
            <h1>Profil Singkat</h1>
            <p>Tentang ITH / Profil Singkat</p>
        </div>
    </div>
    <main class="main-table container d-flex" style="gap:2rem;">
        <div class="table-profil" style="text-align: justify;">
            <img src="assets\img\kampus1.png" align="left" style="width: 300px; height: 245px; padding-top: 10px; padding-right: 20px; padding-bottom: 10px;" alt="Kampus 1">
            <p>Institut Teknologi Bacharuddin Jusuf Habibie (ITH) sebuah perguruan tinggi di Parepare, Sulawesi Selatan, Indonesia. Institut ini dinamai sesuai dengan nama tokoh besar Indonesia, yaitu Prof. Dr. Ing. Bacharuddin Jusuf Habibie Presiden Republik Indonesia ke -3 yang juga merupakan seorang insinyur terkemuka.
            </p><p>ITH memiliki visi untuk menjadi institut yang unggul, memiliki daya saing, dan berstandar tinggi. Institut Teknologi Bachruddin Jusuf Habibie memberikan peranan penting dalam bidang pengetahuan, teknologi dan seni untuk kemajuan masyarakat dan pembangunan.</p><p>
            ITH didirikan berdasarkan Peraturan Presiden Nomor 152 Tahun 2014 tentang Pendirian Institut Teknologi Bachruddin Jusuf Habibie. Rektor saat ini adalah Prof. Dr. Ir. Ansar Suyuti, SH, MT, IPU, ASEAN.Eng., yang dilantik pada tanggal 4 Oktober 2021 untuk masa bakti 2021-2025. ITH hadir sebagai satu-satunya Institut
            Teknologi Negeri di wilayah Timur Indonesia, sebagai upaya pemerintah Indonesia untuk memfasilitasi warga negara khususnya wilayah timur untuk mendapatkan pendidikan tinggi.<img src="assets\img\kampus2.png" align="right" style="width: 300px; height: 239px; padding-left: 20px; padding-top: 15px;" alt="Kampus 2"></p><p>
            Saat ini ITH memiliki jumlah 535 mahasiswa, 3 dosen doktor , 3 guru besar dan 23 dosen muda milenial. ITH menawarkan berbagai program studi dan jurusan. Yang saat ini memiliki dua jurusan yaitu Jurusan Sains yang terdiri dari lima prodi diantarany Matematika, Sains Aktuaria, Sains Data, Biokteknologi serta Sains Informasi
            dan Jurusan Teknologi Produksi & Industri yang terdiri dari lima prodi diantaranya Ilmu komputer, Teknologi Pangan, Teknik Metalurgi, Teknik Sistem Energi, dan Teknik Sipil. Almamater ITH memiliki warna dasar jingga dengan logo ITH berbentuk gerigi. Melalui kepemimpinan yang kuat, ITH bertujuan untuk menghasilkan sarjana
            muda yang ahli di bidang engineering.</p>
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
