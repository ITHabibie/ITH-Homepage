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
            <h1>Sejarah</h1>
            <p>Tentang ITH / Sejarah</p>
        </div>
    </div>
    <main class="main-table container d-flex" style="gap:2rem;">
        <div class="table-profil" style="text-align: justify;">
            <img src="{{asset('assets\img\sejarah.png')}}" align="right" style="width: 31.25rem; height: 40.625rem; padding-left: 1.25rem; padding-top: 0rem;" alt="Sejarah">
            <p>Berdirinya Institut Teknologi B.J. Habibie (ITH) di Kota Parepare melalui perjuangan panjang Bapak Walikota Parepare (Dr. H.M. Taupan Pawe) dan Tim  yang menjawab keraguan orang akan lahirnya Perguruan Tinggi Negeri di Kota Parepare.</p>
            <p>Ide pendirian ITH, bermula ketika Presiden Republik Indonesia ke 6  Bapak Susilo Bambang Yudoyono berkunjung ke Kota Parepare,  pada hari Kamis tanggal 20 Februari 2014 lalu.  Bapak Presiden bermalam di Rumah Jabatan Walikota  dan ditempat  itulah Bapak Walikota Parepare berdiskusi dengan beliau dan melontarkan ide-ide cemerlang untuk menjadikan B.J.Habibie sebagai sumber inspirasi, kemudian tercetuslah keinginan Bapak Walikota (H.M. Taupan Pawe) untuk mendirikan Institut Teknologi Habibie ditempat kelahirannya. Inisiatif itu sambut baik oleh Bapak Presiden dan memanggil Menteri Pendidikan dan Kebudayaan RI (Prof. Dr. Muhammad Nuh) untuk menindaklanjuti keinginan Walikota Parepare.</p>
            <p>Berdirilah INSTITUT TEKNOLOGI B.J. HABIBIE (ITH), kemudian berubah nama menjadi INSTITUT TEKNOLOGI  BACHARUDDIN JUSUF HABIBIE (ITBH)  melalui Peraturan Presisden Nomor 152 Tahun 2014, tanggal 17 Oktober 2014 yang ditandatangani oleh Presiden  H. Susilo Bambang Yudoyono.</p>
            <p>Setelah melalui proses yang panjang dalam izin operasionalnya, maka terbitlah peraturan kelembagaan dan tata kerja melalui Peraturan Menteri Menteri Pendidikan, Kebudayaan, Riset dan Teknologi Republik Indonesia, Nomor 21 Tahun 2021 pada tanggal 4 Agustus 2021,  Organisasi dan Tata Kerja. Maka mulai tanggal 14 Agustus 2021 secara resmi Institut Teknologi B.J. Habibie mulai beroperasi.</p>
            <p>Unggul dalam pengembangan ilmu pengetahuan dan teknologi terapan berstandar internasional yang berwawasan lingkungan dan berbasis enterpreneurship, merupakan inti dari visi Institut Teknologi B.J. Habibie di Kota Parepare.</p>
            <p>Institut Teknologi B.J. Habibie (ITBH)  merupakan  Perguruan  Tinggi  Negeri  (PTN)  penyelenggara pendidikan  Akademis  berlokasi  di  Kota  Parepare Provinsi Sulawesi Selatan. Izin pendirian berdasarkan Peraturan Presiden Nomor 152 Tahun 2014,  tanggal 17 Oktober 2014.</p>
            <p>Penetapan Rektor melalui Keputusan Menteri Pendidikan, Kebudayaan, Riset dan Teknologi Republik Indonesi, Nomor 67373/MPK.A/KP.07.00/2021, tentang Pengangkatan Rektor Institut Teknologi Bacharuddin Jusuf Habibie Periode 2021-2025. Tanggal 04 Oktober 2021.</p>
            <p>Pada awal operasionalnya ITBH menyelenggarakan pendidikan strata satu (S1) bergelar akademik sarjana sesuai dengan keilmuannya. Saat ini Institut Teknologi B.J. Habibie memiliki 3(tiga) program studi, yaitu Program Studi Matematika, Program Studi Teknik Informatika dan Program Studi Sistem Informasi serta mengembangkan program studi baru.</p>
            <p>Kampus ITBH saat ini  berdiri di atas tanah seluas 8,16 Ha yang merupakan  Gedung DPRD dan Gedung Pemuda yang dialihkan menjadi Kampus ITBH berlantai dua dan telah dilengkapi dengan fasilitas memadai, terdiri dari ruang Rektorat, ruang  kuliah, laboratorium Komputer, Perpustkaaan dan fasilitas penunjang lainnya. Persiapan kampus terpadu dilokasi pengembagan ke 3 seluas 34 ha.</p>
            <p>Dalam melaksanakan fungsinya, maka ITBH membekali mahasiswa dengan sikap, pengetahuan dan keterampilan dan kecakapan hidup,  sesuai dengan capaian pembelajaran yang ditetapkan. Proses belajar mengajar mengacu kurikulum berbasis KKNI yang menitikberatkan pada pendalaman keilmuan dan memberikan  pengalaman  belajar baik didalam negeri maupun diluar negeri sesuai  capaian  pembelajaran yang dituju dan membekali juga lulusan untuk berwirausaha.</p>
            <p>AKU DATANG DENGAN CINTA MENUNTUT ILMU DAN TEKNOLOGI, AKU BELAJAR TEKUN,  AKU BERHASIL MENJADI SARJANA PRODUKTIF YANG UNGGUL DAN ENTREPNEURSHIP</p>
            <p>Jadilah mata air jernih yang memberikan kehidupan kepada sekitarmu</p>
            <p>(B.J. Habibie)</p>
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
