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
        {{-- <div class="hero text-center">
            <img src={{ asset('assets/img/new_university.svg') }} alt="">
            <h1>Dokumen Resmi</h1>
            <p>Tentang ITH/Dokumen Resmi</p>
        </div> --}}
        {{-- <main class="main-table d-flex">
            <div class="table">
                <p>Penggunaan dokumen tunduk kepada <a>Terms of Service of ITH Official Document</a></a></p>
                <table>
                    <tr>
                        <th class="text-center">No. </th>
                        <th>Judul Dokumen </th>
                        <th>Tahun </th>
                        <th>Dokumen Indonesia </th>
                        <th>Dokumen Inggris </th>
                    </tr>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Visi dan Misi Tujuan ITH</td>
                        <td>-</td>
                        <td><a href={{ asset('assets/a.html') }} download>Unduh</a></td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Visi dan Misi Tujuan ITH</td>
                        <td>-</td>
                        <td><a href={{ asset('assets/a.html') }} download>Unduh</a></td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Visi dan Misi Tujuan ITH</td>
                        <td>-</td>
                        <td><a href={{ asset('assets/a.html') }} download>Unduh</a></td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Visi dan Misi Tujuan ITH</td>
                        <td>-</td>
                        <td><a href={{ asset('assets/a.html') }} download>Unduh</a></td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Visi dan Misi Tujuan ITH</td>
                        <td>-</td>
                        <td><a href={{ asset('assets/a.html') }} download>Unduh</a></td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Visi dan Misi Tujuan ITH</td>
                        <td>-</td>
                        <td><a href={{ asset('assets/a.html') }} download>Unduh</a></td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Visi dan Misi Tujuan ITH</td>
                        <td>-</td>
                        <td><a href={{ asset('assets/a.html') }} download>Unduh</a></td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Visi dan Misi Tujuan ITH</td>
                        <td>-</td>
                        <td><a href={{ asset('assets/a.html') }} download>Unduh</a></td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Visi dan Misi Tujuan ITH</td>
                        <td>-</td>
                        <td><a href={{ asset('assets/a.html') }} download>Unduh</a></td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Visi dan Misi Tujuan ITH</td>
                        <td>-</td>
                        <td><a href={{ asset('assets/a.html') }} download>Unduh</a></td>
                        <td>1</td>
                    </tr>
                </table>
            </div>
            <div class="side-table">
                <nav> --}}
                    {{-- @foreach ($navbarmenu->whereIn('format',[0,1])->where('view','1')->sortBy('order') as $loop1)
                        {{$loop1->id}} 
                    @endforeach --}}
{{-- 
                    <ul>

                    </ul>
                </nav>
            </div>
        </main> --}}
    {{-- @include('layouts.footer') --}}
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
