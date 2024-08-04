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

    <style>
        .main-table {
            padding: 4rem;
        }

        table {
            margin: 2rem 0;
            width: 100%;
            border-collapse: collapse;
        }

        .side-table {
            /* background-color: #f18516; */
            /* height: 100%; */
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tbody,
        td,
        tfoot,
        th,
        thead,
        tr {
            border-color: inherit;
            border-style: solid;
            border-width: 1px !important;
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
    <div class=" hero-docs text-center align" style=" ">
        <div class="hero-text"
            style="background-color: rgba(0, 0, 0, 0.8);background-position:center;background-image:url({{ asset('assets/img/new_university.svg') }}); padding:2rem 1.5rem 2rem .5rem;color:white;">
            <h1>Dokumen Resmi</h1>
            <p>Tentang ITH/Dokumen Resmi</p>
        </div>
    </div>
    <main class="main-table container d-flex" style="gap:2rem;">
        {{-- <div class="table">
            <p>Penggunaan dokumen tunduk kepada <a>Terms of Service of ITH Official Document</a></a></p>
            <table>
                <th colspan="5">Dokumen Perencanaan</th>
                <tr>
                    <td class="text-center">No. </td>
                    <td>Judul Dokumen </td>
                    <td>Tahun </td>
                    <td>Dokumen Indonesia </td>
                    <td>Dokumen Inggris </td>
                </tr>
                <tr>
                    <td class="text-center">1</td>
                    <td>Renstra</td>
                    <td>-</td>
                    <td><a href={{ asset('assets/a.html') }} download>Unduh</a></td>
                    <td><a href="{{ asset('assets/a.html') }}" download>Download</a></td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td>RKAT</td>
                    <td>-</td>
                    <td><a href={{ asset('assets/a.html') }} download>Unduh</a></td>
                    <td><a href="{{ asset('assets/a.html') }}" download>Download</a></td>
                </tr>
                <tr>
                    <td class="text-center">3</td>
                    <td>RKAKL</td>
                    <td>-</td>
                    <td><a href={{ asset('assets/a.html') }} download>Unduh</a></td>
                    <td><a href="{{ asset('assets/a.html') }}" download>Download</a></td>
                </tr>
                <tr>
                    <td class="text-center">4</td>
                    <td>Pedoman Renstra</td>
                    <td>-</td>
                    <td><a href={{ asset('assets/a.html') }} download>Unduh</a></td>
                    <td><a href="{{ asset('assets/a.html') }}" download>Download</a></td>
                </tr>
                <tr>
                    <td class="text-center">5</td>
                    <td>Pedoman RKT dan Rencana Aksi</td>
                    <td>-</td>
                    <td><a href={{ asset('assets/a.html') }} download>Unduh</a></td>
                    <td><a href="{{ asset('assets/a.html') }}" download>Download</a></td>
                </tr>
                <th colspan="5">SAKIP</th>
                <tr>
                    <td class="text-center">No. </td>
                    <td>Judul Dokumen </td>
                    <td>Tahun </td>
                    <td>Dokumen Indonesia </td>
                    <td>Dokumen Inggris </td>
                </tr>
                <tr>
                    <td class="text-center">1</td>
                    <td>Laporan Hasil Kinerja SAKIP </td>
                    <td>-</td>
                    <td><a href={{ asset('assets/a.html') }} download>Unduh</a></td>
                    <td><a href="{{ asset('assets/a.html') }}" download>Download</a></td>
                </tr>
                <th colspan="5">Dokumen Pelaksanaan</th>

                <tr>
                    <td class="text-center">No. </td>
                    <td>Judul Dokumen </td>
                    <td>Tahun </td>
                    <td>Dokumen Indonesia </td>
                    <td>Dokumen Inggris </td>
                </tr>
                <tr>
                    <td class="text-center">1</td>
                    <td>Laporan dan Dokumentasi Pelaksanaan Kegiatan</td>
                    <td>-</td>
                    <td><a href={{ asset('assets/a.html') }} download>Unduh</a></td>
                    <td><a href="{{ asset('assets/a.html') }}" download>Download</a></td>
                </tr>
                <th colspan="5"> Dokumen Evaluasi</th>
                <tr>
                    <td class="text-center">No. </td>
                    <td>Judul Dokumen </td>
                    <td>Tahun </td>
                    <td>Dokumen Indonesia </td>
                    <td>Dokumen Inggris </td>
                </tr>
                <tr>
                    <td class="text-center">1</td>
                    <td>Laporan Kinerja 2023</td>
                    <td>-</td>
                    <td><a href={{ asset('assets/a.html') }} download>Unduh</a></td>
                    <td><a href="{{ asset('assets/a.html') }}" download>Download</a></td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td>Laporan Kinerja 2024</td>
                    <td>-</td>
                    <td><a href={{ asset('assets/a.html') }} download>Unduh</a></td>
                    <td><a href="{{ asset('assets/a.html') }}" download>Download</a></td>
                </tr>
            </table>
        </div>
 --}}
        <div class="table">
            <p class="card">
                <button
                    style="align-self: auto; text-align: start; background-color: white; color: black; font-family: Fira sans"
                    class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                    aria-expanded="false" aria-controls="collapseExample">
                    Rencana Strategis
                </button>
            </p>
            <div class="collapse" id="collapseExample" style="font-family: Fira Sans">
                <div class="card card-body">
                    <ul>
                        <li>Rencana Strategis ITH 2024 <a href="{{ asset('assets/a.html') }}" download>Klik
                                Disini</a></li>
                        <li>Rencana Strategis ITH 2023-2024<a href="{{ asset('assets/a.html') }}" download>Klik
                                Disini</a></li>
                        <li>Definisi Operasional Renstra ITH <a href="{{ asset('assets/a.html') }}" download>Klik
                                Disini </a></li>
                        <li>SK Rencana Strategis Institut Teknologi Bacharuddin Jusuf Habibie 2023-2024 <a
                                href="{{ asset('assets/a.html') }}" download>Klik Disini </a></li>
                    </ul>
                </div>
            </div>
            <p class="card">
                <button
                    style="align-self: auto; text-align: start; background-color: white; color: black; font-family: Fira sans"
                    class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#perjanjianExample"
                    aria-expanded="false" aria-controls="perjanjianExample">
                    Perjanjian Kinerja
                </button>
            </p>
            <div class="collapse" id="perjanjianExample" style="font-family: Fira Sans">
                <div class="card card-body">
                    <ul>
                        <li>Perjanjian Kinerja 2023 <a href="{{ asset('assets/a.html') }}" download>Klik Disini </a>
                        </li>
                        <ul>
                            <li>Perjanjian Kinerja Awal 2023 <a href="{{ asset('assets/awal2023.pdf') }}" download>Klik
                                    Disini </a>
                            </li>
                            <li>Perjanjian Kinerja Akhir 2023 <a href="{{ asset('assets/awal2023.pdf') }}"
                                    download>Klik Disini </a>
                            </li>
                        </ul>
                    </ul>
                </div>
            </div>
            <p class="card">
                <button
                    style="align-self: auto; text-align: start; background-color: white; color: black; font-family: Fira sans"
                    class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#SakipExample"
                    aria-expanded="false" aria-controls="SakipExample">
                    Indikator Kinerja Utama
                </button>
            </p>
            <div class="collapse" id="SakipExample" style="font-family: Fira Sans">
                <div class="card card-body">
                    <ul>
                        <li>Indikator Kinerja Utama 2023<a href="{{ asset('assets/a.html') }}" download>Klik Disini</a>
                        </li>
                        <li>Indikator Kinerja Utama 2024<a href="{{ asset('assets/a.html') }}" download>Klik Disini</a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="card">
                <button
                    style="align-self: auto; text-align: start; background-color: white; color: black; font-family: Fira sans"
                    class="btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#PelaksanaanExample" aria-expanded="false" aria-controls="PelaksanaanExample">
                    Indikator Kerja Tahunan
                </button>
            </p>
            <div class="collapse" id="PelaksanaanExample" style="font-family: Fira Sans">
                <div class="card card-body">
                    <ul>
                        <li>Rencana Kinerja Tahunan 2023 <a href="{{ asset('assets/a.html') }}" download>Klik
                                Disini</a></li>
                        <li>Rencana Kinerja Tahunan 2024 <a href="{{ asset('assets/a.html') }}" download>Klik
                                Disini</a></li>
                    </ul>
                    </ul>
                </div>
            </div>
            <p class="card">
                <button
                    style="align-self: auto; text-align: start; background-color: white; color: black; font-family: Fira sans"
                    class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#EvaluasiExample"
                    aria-expanded="false" aria-controls="EvaluasiExample">
                    Rencana Aksi
                </button>
            </p>
            <div class="collapse" id="EvaluasiExample" style="font-family: Fira Sans">
                <div class="card card-body">
                    <ul>
                        <li>Rencana Aksi 2024 <a href="{{ asset('assets/a.html') }}" download>Klik Disini</a></li>
                        <li>Rencana Aksi 2023<a href="{{ asset('assets/a.html') }}" download>Klik Disini</a></li>
                    </ul>
                </div>
            </div>
            <p class="card">
                <button
                    style="align-self: auto; text-align: start; background-color: white; color: black; font-family: Fira sans"
                    class="btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#LaporanKinerja" aria-expanded="false" aria-controls="LaporanKinerja">
                    Laporan Kinerja
                </button>
            </p>
            <div class="collapse" id="LaporanKinerja" style="font-family: Fira Sans">
                <div class="card card-body">
                    <ul>
                        <li>Laporan Kinerja Tahun 2023 <a href="{{ asset('assets/a.html') }}" download>Klik Disini</a>
                        </li>
                        <li>Laporan Kinerja Tahun 2024 <a href="{{ asset('assets/a.html') }}" download>Klik Disini</a>
                        </li>
                        <li>Laporan Kinerja Unit ITH <a href="{{ asset('assets/a.html') }}" download>Klik Disini</a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="card">
                <button
                    style="align-self: auto; text-align: start; background-color: white; color: black; font-family: Fira sans"
                    class="btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#PengukuranKinerja" aria-expanded="false" aria-controls="PengukuranKinerja">
                    Pengukuran Kinerja
                </button>
            </p>
            <div class="collapse" id="PengukuranKinerja" style="font-family: Fira Sans">
                <div class="card card-body">
                    <ul>
                        <li>Pengukuran Tahun 2023 <a href="{{ asset('assets/a.html') }}" download>Klik Disini</a>
                        </li>
                        <li>Pengukuran Kinerja Tahun 2024 <a href="{{ asset('assets/a.html') }}" download>Klik
                                Disini</a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="card">
                <button
                    style="align-self: auto; text-align: start; background-color: white; color: black; font-family: Fira sans"
                    class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#SKP"
                    aria-expanded="false" aria-controls="SKP">
                    SKP
                </button>
            </p>
            <div class="collapse" id="SKP" style="font-family: Fira Sans">
                <div class="card card-body">
                    <ul>
                        <li>SKP Tenaga Pendidik ITH <a href="{{ asset('assets/a.html') }}" download>Klik Disini</a>
                        </li>
                        <li>SKP Kepala Biro Umum dan Keuangan ITH<a href="{{ asset('assets/a.html') }}" download>Klik
                                Disini</a>
                        </li>
                        <li>SKP Tenaga Kependidikan ITH<a href="{{ asset('assets/a.html') }}" download>Klik
                                Disini</a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="card">
                <button
                    style="align-self: auto; text-align: start; background-color: white; color: black; font-family: Fira sans"
                    class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#Prosedur"
                    aria-expanded="false" aria-controls="Prosedur">
                    Prosedur Organisasi Standar
                </button>
            </p>
            <div class="collapse" id="Prosedur" style="font-family: Fira Sans">
                <div class="card card-body">
                    <ul>
                        <li>SOP Pembuatan LAKIN <a href="{{ asset('assets/a.html') }}" download>Klik Disini</a>
                        </li>
                        <li>SOP Monev Pelaksanaan Program dan Anggaran<a href="{{ asset('assets/a.html') }}"
                                download>Klik
                                Disini</a>
                        </li>
                        <li>SOP<a href="{{ asset('assets/a.html') }}" download>Klik
                                Disini</a>
                        </li>
                        <li>SOP BKD<a href="{{ asset('assets/a.html') }}" download>Klik
                                Disini</a>
                        </li>
                        <li>SOP Penyusunan SKP<a href="{{ asset('assets/a.html') }}" download>Klik
                                Disini</a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="card">
                <button
                    style="align-self: auto; text-align: start; background-color: white; color: black; font-family: Fira sans"
                    class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#Notula"
                    aria-expanded="false" aria-controls="Notula">
                    Notula dan Laporan
                </button>
            </p>
            <div class="collapse" id="Notula" style="font-family: Fira Sans">
                <div class="card card-body">
                    <ul>
                        <li>Notula dan Laporan 2024<a href="{{ asset('assets/a.html') }}" download>Klik Disini</a>
                        </li>
                        <li>Notula dan Laporan 2023<a href="{{ asset('assets/a.html') }}" download>Klik
                                Disini</a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="card">
                <button
                    style="align-self: auto; text-align: start; background-color: white; color: black; font-family: Fira sans"
                    class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#Rnp"
                    aria-expanded="false" aria-controls="Rnp">
                    Reward & Punishment
                </button>
            </p>
            <div class="collapse" id="Rnp" style="font-family: Fira Sans">
                <div class="card card-body">
                    <ul>
                        <li>Dokumen Reward & Punishment <a href="{{ asset('assets/a.html') }}" download>Klik
                                Disini</a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="card">
                <button
                    style="align-self: auto; text-align: start; background-color: white; color: black; font-family: Fira sans"
                    class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#Dipa"
                    aria-expanded="false" aria-controls="Dipa">
                    DIPA/RKAKL/TOR
                </button>
            </p>
            <div class="collapse" id="Dipa" style="font-family: Fira Sans">
                <div class="card card-body">
                    <ul>
                        <li>DIPA Tahun 2024<a href="{{ asset('assets/a.html') }}" download>Klik
                                Disini</a>
                        </li>
                        <li>DIPA Tahun 2023<a href="{{ asset('assets/a.html') }}" download>Klik
                                Disini</a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="card">
                <button
                    style="align-self: auto; text-align: start; background-color: white; color: black; font-family: Fira sans"
                    class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#Kepegawaian"
                    aria-expanded="false" aria-controls="Kepegawaian">
                    Dokumen Kepegawaian
                </button>
            </p>
            <div class="collapse" id="Kepegawaian" style="font-family: Fira Sans">
                <div class="card card-body">
                    <ul>
                        <li>Dokumen Kepegawaian <a href="{{ asset('assets/a.html') }}" download>Klik
                                Disini</a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="card">
                <button
                    style="align-self: auto; text-align: start; background-color: white; color: black; font-family: Fira sans"
                    class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#LembarSAKIP"
                    aria-expanded="false" aria-controls="LembarSAKIP">
                    Lembar Hasil Evaluasi SAKIP
                </button>
            </p>
            <div class="collapse" id="LembarSAKIP" style="font-family: Fira Sans">
                <div class="card card-body">
                    <ul>
                        <li>Lembar Hasil Evaluasi SAKIP 2024 <a href="{{ asset('assets/a.html') }}" download>Klik
                                Disini</a>
                        </li>
                        <li>Lembar Hasil Evaluasi SAKIP 2023 <a href="{{ asset('assets/a.html') }}" download>Klik
                                Disini</a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="card">
                <button
                    style="align-self: auto; text-align: start; background-color: white; color: black; font-family: Fira sans"
                    class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#Pohon"
                    aria-expanded="false" aria-controls="Pohon">
                    Pohon Kinerja
                </button>
            </p>
            <div class="collapse" id="Pohon" style="font-family: Fira Sans">
                <div class="card card-body">
                    <ul>
                        <li>Pohon Kinerja 2024 <a href="{{ asset('assets/a.html') }}" download>Klik
                                Disini</a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="card">
                <button
                    style="align-self: auto; text-align: start; background-color: white; color: black; font-family: Fira sans"
                    class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#Pedoman"
                    aria-expanded="false" aria-controls="Pedoman">
                    Pedoman
                </button>
            </p>
            <div class="collapse" id="Pedoman" style="font-family: Fira Sans">
                <div class="card card-body">
                    <ul>
                        <li>Pedoman Tahun 2024 <a href="{{ asset('assets/a.html') }}" download>Klik
                                Disini</a>
                        </li>
                        <li>Pedoman Tahun 2023 <a href="{{ asset('assets/a.html') }}" download>Klik
                                Disini</a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="card">
                <button
                    style="align-self: auto; text-align: start; background-color: white; color: black; font-family: Fira sans"
                    class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#Wawancara"
                    aria-expanded="false" aria-controls="Wawancara">
                    Wawancara
                </button>
            </p>
            <div class="collapse" id="Wawancara" style="font-family: Fira Sans">
                <div class="card card-body">
                    <ul>
                        <li>Dokumen Wawancara <a href="{{ asset('assets/a.html') }}" download>Klik
                                Disini</a>
                        </li>
                    </ul>
                </div>
            </div>

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
