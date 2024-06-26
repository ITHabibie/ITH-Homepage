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
    <style>
        .img-container img {
            width: 13rem;
        }

        #numbers .container .row .col p {
            border-top: 2px solid white !important;
            margin-top: -.6rem;
            font-size: 1.42rem !important;
        }

        #numbers .container .row .col h4 {}

        #carouselExample {
            display: none;
        }

        #numbers .container .row .col h4 {
            font-family: "IBM-Plex-Sans", sans-serif;
            font-weight: bold;
            color: white;
            font-size: 3rem;
            animation: countup 2s ease-out;
        }

        #numbers .row .col {
            align-items: center;
            display: flex;
            flex-direction: column;
        }

        #numbers .container .row .col p {
            font-family: "IBM-Plex-Sans", sans-serif;
            font-weight: 600;
            color: white;
            font-size: 1.6rem;
            border-top: 4px solid white;
        }

        body {
            overflow-x: hidden;
        }

        #hero {
            height: 61vh !important;
        }

        #myVideo {
            transform: translate(-50%, -57%) !important;
        }

        #hero ul {
            list-style-type: none;
            display: flex;
            justify-content: center;
            padding: 1rem;
            left: 50%;
            top: 100%;
            width: 100vw;
            position: sticky;
            transform: translate(-50%, 30%);
            background: rgba(0, 0, 0, 0.4);
        }

        .bayang {
            text-shadow: 2px 2px #2f2f2f;
        }

        #footer {
            background: #fff;
            padding: 0 0 30px 0;
            padding: 2rem;
            color: #fff;
            background-image: url('https://ith.ac.id/assets/img/Group\ 12.png');
            /* background-image: url({{ asset('assets/img/angkaith\ 1.png') }}); */
            /* background-image: url("../img/Group\ 12.png"); */
            font-size: 14px;
            width: 100vw;
        }

        #numbers {
            position: relative;
            width: 100dvw;
            z-index: -1;
            height: 100%;
            background-size: cover;
            background-image: url({{ asset('assets/img/angkaith\ 1.png') }});

        }

        section {
            padding: 0;
        }

        #hero {
            width: 100%;
            height: 81vh;
            margin-top: 8rem;
            background: url("../img/kampus.png") bottom left;
            background-size: cover;
            position: relative;
        }

        .adm-img {
            width: 32rem;
        }

        .section-title h2 {
            font-size: 24px;
            letter-spacing: 1px;
            font-weight: 700;
            padding: 8px 20px;
            margin: 0;
            color: #106eea;
            display: inline-block;
            text-transform: uppercase;
            border-radius: 50px;
            text-decoration: underline;
            text-underline-offset: 1rem;
        }

        #myVideo {
            z-index: -1;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            min-width: 100%;
            min-height: 100%;
            width: 20vw !important;
            height: auto;
        }

        #footer {
            position: relative;
            z-index: 999999;
        }

        .adm {
            text-align: center;
            background: #D9D9D9;
            padding: 60px;
        }

        .member-img a img {
            left: 0 !important;
        }

        /* @media (max-width: 574px) {
            #footer .d-flex .img .img-container{
                flex-wrap: wrap;
            }
            .img-container img{
                width: 9rem !important;
            }
            #hero .small-navs {
                display: none !important;
            }

            #hero {
                height: 33vh !important;
            }

            #myVideo {
                transform: translate(-50%, -82%) !important;
                width: 70vh !important;
            }

            .adm {
                padding: 23px !important;
            }

            .adm-img {
                width: 23rem !important;
            }

            .bg-art {
                display: none;
            }
        } */

        @media (max-width: 394px) {
            .img-container img {
                width: 6rem;
            }

            .adm-img {
                width: 8rem;
            }
        }

        @media (max-width: 405px) {
            .adm-img {
                width: 15rem !important;
            }
        }

        @media (max-width: 990px) {
            .berita div {
                width: 100%;
            }

            .footer-left {
                display: none !important;
            }

            .terms,
            .icons {
                display: flex !important;
                flex-direction: row !important;
            }

            #hero {
                height: 38vh !important;
            }

            .tnc {
                margin-top: 3vh !important;
            }

            #myVideo {
                z-index: -1;
                position: fixed;
                left: 50%;
                top: 50%;
                transform: translate(-50%,
                        -72%) !important;

                width: 100vh !important;
                height: 100vh !important;
            }

            #hero .small-navs {
                display: none !important;
            }

            .section-title {
                margin: 0 !important;
                padding: 0 !important;
            }

            body {
                overflow-x: hidden;
            }

            .topic-img {
                widows: 100% !important;
            }

            .bg-art {
                display: none;
            }



            #footer .img-container {
                display: flex !important;
                flex-direction: row;
                justify-content: space-evenly;
            }

            .tnc {
                display: flex !important;
                flex-direction: column !important;
            }

            #footer div {
                display: flex;
                flex-direction: column;
            }

            .berita,
            .event-pengumuman {
                display: flex !important;
                flex-direction: column !important;
            }

            /* .bg-art,
            #myVideo {
                position: absolute;
                display: none;
                visibility: hidden
            } */
        }

        #numbers .container .row .col h4 {
            font-family: "IBM Plex Sans", sans-serif;
            font-weight: bold;
            color: white;
            font-size: 4rem;
            animation: countup 2s ease-out;
        }

        @media (max-width: 768px) {
            .angka a {
                font-size: 10px !important;
            }

            #numbers .container .row .col h4 {
                font-family: "IBM Plex Sans", sans-serif;
                font-weight: bold;
                color: white;
                font-size: 2rem;
                animation: countup 2s ease-out;
            }

            #numbers .container .row .col p {
                border-top: 2px solid white !important;
                margin-top: -.6rem;
                font-size: .8rem !important;
            }

            .footer-left {
                display: none !important;
            }

            .terms,
            .icons {
                display: flex !important;
                flex-direction: row !important;
            }

            .adm-img {
                width: 22rem;
            }

            #hero {
                height: 38vh;
            }

            .adm {
                padding: 32px;
            }

            .tnc {
                margin-top: 3vh !important;
            }

            #hero {
                height: 56vh !important;
            }

            #myVideo {
                z-index: -1;
                position: fixed;
                left: 50%;
                top: 50%;
                transform: translate(-50%,
                        -64%) !important;

                width: 100vh !important;
                height: 100vh !important;
            }

            #hero .small-navs {
                display: none !important;
            }

            .section-title {
                margin: 0 !important;
                padding: 0 !important;
            }

            body {
                overflow-x: hidden;
            }

            .topic-img {
                widows: 100% !important;
            }

            .bg-art {
                display: none;
            }

            .img-container img {
                width: 8rem;
            }

            #footer .img-container {
                display: flex !important;
                flex-direction: row;
                justify-content: space-evenly;
            }

            .tnc {
                display: flex !important;
                flex-direction: column !important;
            }

            #footer div {
                display: flex;
                flex-direction: column;
            }

            .berita,
            .event-pengumuman {
                display: flex !important;
                flex-direction: column !important;
            }

            /* .bg-art,
            #myVideo {
                position: absolute;
                display: none;
                visibility: hidden
            } */
        }

        @media (max-width: 574px) {
            #footer .d-flex .img .img-container {
                flex-wrap: wrap;
            }


            #hero .small-navs {
                display: none !important;
            }

            #hero {
                height: 33vh;
            }

            #myVideo {
                transform: translate(-50%, -67%);
                width: 47vh;
            }

            .adm {
                padding: 23px;
            }

            .adm-img {
                width: 23rem;
            }

            .bg-art {
                display: none;
            }
        }
    </style>
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
    @isset($jumbotron)
        @if ($jumbotron->style == 2)
            {{-- <section id="hero" class="d-flex align-items-center">
                    <div class="container">
                        <div class="justify-content-center">
                            <div class="col-lg-12 order-1 order-lg-2">
                                <center>
                                    <img src="{{asset('storage')}}/{{$jumbotron->image}}" style="height: 330px">
                                    <h1 class="mt-3">{{$language == 'id' ? $jumbotron->indtitle:$jumbotron->engtitle}}</h1>
                                    <h2 class="mt-3">{{$language == 'id' ? $jumbotron->indsubtitle:$jumbotron->engsubtitle}}</h2>
                                </center>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                </section> --}}
            <section id="hero" class="d-flex align-items-center">
                <img src="">
                <p>halo</p>
                {{-- <div class="container">
                    <div class="row">
                        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 aos-init aos-animate"
                            data-aos="fade-up" data-aos-delay="200">
                            <h1>Better Solutions For Your Business</h1>
                            <h2>We are team of talented designers making websites with Bootstrap</h2>
                            <div class="d-flex justify-content-center justify-content-lg-start">
                                <a href="#about" class="btn-get-started scrollto">Get Started</a>
                                <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
                                        class="bi bi-play-circle"></i><span>Watch Video</span></a>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 hero-img aos-init aos-animate" data-aos="zoom-in"
                            data-aos-delay="200">
                            <!-- <img src="assets/img/hero-img.png" class="img-fluid animated" alt=""> -->
                        </div>
                      </div>
                    </div> --}}

            </section>
        @elseif ($jumbotron->style == 1)
            <section id="hero" class="d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                            style="position:relative; z-index:11;">
                            <video id="myVideo" width="1920" height="1080" autoplay muted loop>
                                <source src="{{ asset('assets/ithComprezzzz.mp4') }}"type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
                <ul class="small-navs"
                    style="z-index:11;list-style-type: none;display: flex;justify-content: center;padding: 1rem;left: 50%;top: 100%;width: 50vw;position: sticky;transform: translate(-100%, 30%);background: rgba(0, 0, 0, 0.4);">
                    <li class="small-navs"
                        style="font-size: 14px;font-weight: 600;font-family: Roboto Mono, monospace;color: white;margin-right: 1rem;position: relative;">
                        <a href="https://www.youtube.com/@ith_idn" target="_blank" style="color: white;"><i
                            class="bi bi-youtube mt-4"></i> Kanal Youtube</a>
                    </li>
                    <div style="border-left:3px solid #fff;height:auto; width: 20px;"></div>
                    <li class="small-navs"
                    style="font-size: 14px;font-weight: 600;font-family: Roboto Mono, monospace;color: white;margin-right: 1rem;position: relative;">
                    <a href="https://simpel.ith.ac.id" target="_blank" style="color: white;">Pembelajaran
                            Daring</a>
                    </li>

                </ul>

            </section>
        @endif
    @endisset
    <main id="main" style="z-index:11; position:relative;">
        <!-- ======= Header ======= -->
        {{-- @include('layouts.top') --}}
        <!-- End Header -->

        {{-- <section id="informasi" class="details">
            <div class="container">
                <div class="section-title">
                    <h2 style="color: {{ $page->alt1 }}">{{ __('cek.info-1') }}</h2>
                    <h3><span style="color: {{ $page->alt1 }}">{{ __('cek.info-2') }}</span>.</h3>
                </div>
                <div class="row">
                    <div class="col-12">
                        @foreach ($postsInfo as $item)
                            <div
                                class="row no-gutters rounded overflow-hidden flex-md-row my-4 h-md-250 position-relative">
                                <div class="col-auto d-none d-lg-block rounded mb-5 mt-3"
                                    style="width: 20%; background-size: cover; background-image: url({{ asset('storage/' . $item->cover) }});">
                                </div>
                                <div class="col p-4 d-flex flex-column position-static">
                                    <a href="{{ route('searchByCategory', ['id' => 1]) }}">
                                        <strong
                                            class="d-inline-block mb-2 text-primary">{{ $language == 'id' ? $item->category->name : $item->category->engtitle }}</strong>
                                    </a>
                                    <a href="{{ route('show', $item->slug) }}">
                                        <h3 class="mb-0" style="color: #444444">
                                            {{ $language == 'id' ? $item->title : $item->engtitle }}</h3>
                                    </a>
                                    <div class="mb-1 text-muted">{{ $item->user->name }} |
                                        {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</div>
                                    <p class="card-text mb-auto">
                                        @if ($language == 'id')
                                            {!! \Str::words($item->desc, 30) !!}
                                        @else
                                            {!! \Str::words($item->eng, 30) !!}
                                        @endif
                                    </p>
                                    <div class="mb-3">
                                        <a href="{{ route('show', $item->slug) }}"><i
                                                style="font-size: 13px">{{ $language == 'id' ? 'Lanjutkan Membaca...' : 'Continue reading...' }}</i></a>
                                    </div>
                                    <div class="">
                                        <div class="social-links">
                                            <a href="#" class="" style="font-size: 15px;">Tags :</a>
                                            @foreach ($item->tags as $items)
                                                <a href="{{ route('tag', $items->slug) }}" class="btn btn-sm"
                                                    style="background: rgb(228, 226, 226); font-size: 10px">{{ $language == 'id' ? $items->name : $items->engtitle }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- ======= Header ======= -->
        @include('layouts.mid')

        <!-- End Header -->
        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <section class="adm">
                <a href="https://admission.ith.ac.id">
                    <img class="adm-img" src="{{ asset('assets/img/admm.png') }}" style=" object-fit: cover">
                </a>
            </section>
            <div class="container " data-aos="fade-up">
                <div class="section-title" style="padding-top: 2rem;">
                    <h2
                        style="color:#040348; background:none; text-decoration:underline; text-underline-offset:1rem; font-size:24px;">
                        {{ __('cek.berita-1') }}</h2>
                    {{-- <h3><span style="color: {{$page->alt1}}">{{__('cek.berita-2')}}</span>.</h3> --}}
                </div>
                {{-- <div class="row"> --}}
                <div class="berita" style="display:flex; justify-content:space-evenly; margin-top:1rem;">
                    @foreach ($postsNews as $item)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="member">
                                <div class="member-img">
                                    <a style="width:300px;" href="{{ route('show', $item->slug) }}">
                                        <img class="topic-img" style=" object-fit: cover; height: 200px; width:100%;"
                                            {{-- src="{{ $item->cover }}"> --}}
                                            src="{{ asset('assets/img/berita/') }}/{{ $item->cover }}">
                                        {{-- <div
                                            style="height: 300px; background-image: url({{ asset('storage/' . $item->cover) }}); background-size: cover">
                                        </div> --}}
                                    </a>
                                    {{-- <div class="social">
                                        <a class="mb-1" href=""
                                            style="width: 200px; background: {{ $page->alt1 }};">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</a>
                                    </div> --}}
                                </div>
                                <div class="pt-2 px-2">
                                    <div class="social-links d-flex justify-content-between" style="font-size: 12px">
                                        @foreach ($item->tags as $tags)
                                            <div class="mt-2">

                                                <a>
                                                    <i>Tags :</i>&ensp;
                                                </a>
                                                <a class="" style="color: {{ $page->alt1 }};"
                                                    href="{{ route('tag', $tags->slug) }}">
                                                    <i>
                                                        <strong>
                                                            @if ($language == 'id')
                                                                {{ $tags->name }}
                                                            @else
                                                                {{ $tags->engtitle }}
                                                            @endif
                                                        </strong>
                                                    </i>
                                                </a>
                                            </div>
                                            <p class="mt-2">
                                                <i class="bi bi-calendar">
                                                </i>{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                            </p>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="member-info  text-center">
                                    <a href="{{ route('show', $item->slug) }}">
                                        <h4 class="judul-berita">
                                            {{ $language == 'id' ? \Str::words($item->title) : \Str::words($item->engtitle) }}
                                        </h4>
                                    </a>
                                    <span class="desc-berita">
                                        @if ($language == 'id')
                                            {!! \Str::words($item->desc, 20) !!}
                                        @else
                                            {!! \Str::words($item->eng, 20) !!}
                                        @endif
                                    </span>
                                    <hr class="mt-4">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center " style="color: #fff;">
                    <p style="background-color: #F18516; color: #fff;border-radius: 4px;"
                        class="p-2 text-center btn-event"><i class="bi bi-archive-fill"></i> Topik utama lainnya</p>
                </div>
            </div>
            {{-- event pengumuman --}}
            <div class="container event-pengumuman d-flex justify-content-evenly" data-aos="fade-up">
                <div class="event">
                    <div class="section-title" style="margin-left: 10rem;padding-top: 2rem;">
                        <h2
                            style="color:#040348;background:none;text-decoration:underline;text-underline-offset:1rem;font-size:24px;">
                            {{ __('cek.event') }}</h2>
                    </div>
                    <div class="event p-2">
                        <img class="bg-art" src="{{ asset('assets/img/bgart.png') }}"
                            style=" position: absolute; left:0vw;z-index:1;">
                        @foreach ($postsEvents as $item)
                            <div style="justify-content:space-between;display:flex;border-radius: 14px; width:100%;z-index:2;position:relative; background-position: right center; background-color:#0660A6;"
                                class="event mb-4 shadow-sm">
                                <div class="p-2">
                                    <p class="desc-berita"
                                        style="z-index:999 !important;color:#fff; margin-bottom: 0; font-size: .9rem;">
                                        {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('F j, Y') }}
                                    </p>
                                    <a style="z-index:999 !important;color:#fff" class="judul-berita"
                                        href="{{ route('show', $item->slug) }}">
                                        <p>{{ $language == 'id' ? \Str::words($item->title, 4, '...') : \Str::words($item->engtitle, 7, '...') }}
                                        </p>
                                    </a>
                                </div>
                                <div style="border-radius: 12px;">
                                    <img style="object-fit:cover; height:5rem; width:10rem; border-radius: 24px 12px 12px 24px;"
                                        src="{{ asset('assets/img/berita/') }}/{{ $item->cover }}" alt="">
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center " style="color: #fff;">
                        <p style="background-color: #F18516; color: #fff;border-radius: 4px;"
                            class="p-2 text-center btn-event">
                            <i class="bi bi-archive-fill"></i> Kegiatan ITH lainnya
                        </p>
                    </div>
                </div>
                <div style="border-left:3px solid #615F5F;height:auto; width: 20px; margin: 4rem 0 1rem 0;"></div>
                <div class="pengumuman">
                    <div class="section-title" style="padding-top: 2rem; margin-right: 10rem;">
                        <h2
                            style="color:#040348;background:none;text-decoration:underline;text-underline-offset:1rem;font-size:24px;">
                            {{ __('cek.pengumuman') }}</h2>
                    </div>
                    <div class="event p-2">
                        <img class="bg-art" src="{{ asset('assets/img/bgart2.png') }}"
                            style=" position: absolute; right:0vw;">
                        @foreach ($postsAnnounce as $item)
                            <div style="justify-content:space-between;display:flex;border-radius: 14px; width:100%; background-position: right center; background-color:#0660A6; position:relative"
                                class="event mb-4 shadow-sm">
                                <div class="p-2">
                                    <p class="desc-berita"
                                        style="z-index:999 !important;color:#fff; margin-bottom: 0; font-size: .9rem;">
                                        {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('F j, Y') }}
                                    </p>
                                    <a style="z-index:999 !important;color:#fff" class="judul-berita"
                                        href="{{ route('show', $item->slug) }}">
                                        <p>{{ $language == 'id' ? \Str::words($item->title, 4, '...') : \Str::words($item->engtitle, 7, '...') }}
                                        </p>
                                    </a>
                                </div>
                                <div style="border-radius: 12px;">
                                    <img style="object-fit:cover; height:5rem; width:10rem; border-radius: 24px 12px 12px 24px;"
                                        src="{{ asset('assets/img/berita/') }}/{{ $item->cover }}" alt="">
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center " style="color: #fff;">
                        <p style="background-color: #F18516; color: #fff;border-radius: 4px; z-index:100000 !important"
                            class="p-2 text-center btn-event">
                            <i class="bi bi-archive-fill"></i> Pengumuman lainnya
                        </p>
                    </div>
                </div>

                {{-- <div class="pengumuman">
                    <div class="section-title" style="padding-top: 2rem">
                        <h2 style="color: {{ $page->alt1 }}">{{ __('cek.berita-1') }}</h2>
                    </div>
                    <div class="">
                        @foreach ($postsNews as $item)
                            <p>halo</p>
                        @endforeach
                    </div>
                </div> --}}
            </div>
        </section>
        <!-- End Team Section -->
        <section id="numbers">
            <h2 class="text-center bayang"
                style="font-family: 'IBM Plex Sans', sans-serif;font-weight: 900; color:white;text-shadow: 2px 2px #2f2f2f;">
                ITH
                DALAM
                ANGKA
            </h2>
            <div style="padding:0.5rem;"
                class="container border-light d-flex flex-column justify-content-around   border border-5 border-primary">
                <div class="row" style="padding:0.5rem;">
                    <div class="col counter text-center angka" id="counter">
                        <h4 class="count bayang" data-target="2">0</h4>
                        {{-- <hr> --}}
                        <p class="bayang">Jurusan</p>
                    </div>
                    <div class="col counter text-center angka" id="counter">
                        <h4 class="count bayang" data-target="11">0</h4>
                        {{-- <hr> --}}
                        <p class="bayang">Program Studi</p>
                    </div>
                    {{-- <div class="col counter text-center angka" id="counter">
                        <h4 class="bayang count" data-target="10">0</h4> --}}
                    {{-- <hr> --}}
                    {{-- <p class="bayang">Program Studi</p>
                    </div> --}}
                    <div class="col counter text-center angka" id="counter">
                        <h4 class="bayang count" data-target="535">0</h4>
                        {{-- <hr> --}}
                        <p class="bayang">Mahasiswa</p>
                    </div>
                </div>
                <div class="row" style="padding:0.5rem;">
                    <div class="col counter text-center angka" id="counter">
                        <h4 class="count bayang" data-target="4">0</h4>
                        {{-- <hr> --}}
                        <p class="bayang">Doktor</p>
                    </div>
                    <div class="col counter text-center angka" id="counter">
                        <h4 class="count bayang" data-target="3">0</h4>
                        {{-- <hr> --}}
                        <p class="bayang">Guru Besar</p>
                    </div>
                    <div class="col counter text-center angka" id="counter">
                        <h4 class="count bayang" data-target="43">0</h4>
                        {{-- <hr> --}}
                        <p class="bayang">Dosen</p>
                    </div>
                </div>
                <div class="row" style="padding:0.5rem;">
                    <div class="flex desc-berita text-center angka">
                        <a
                            style="font-size: 14px; background-color: #0660A6; padding: .5rem;color: white; border-radius: 4px"><i
                                class="bi bi-book"></i> fakta lain</a>
                        <a
                            style="font-size: 14px; background-color: #fff; padding: .5rem;color: black; border-radius: 4px">Pindai
                            IKU</a>
                        <a
                            style="font-size: 14px; background-color: #ec436d; padding: .5rem;color: white; border-radius: 4px">Pindai
                            PT</a>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col counter text-center angka" id="counter">
                        <h4 class="count"  data-target="4" >0</h4>
                        <hr>
                        <p>Guru Besar</p>
                    </div>
                    <div class="col counter text-center angka" id="counter">
                        <h4 class="count"  data-target="3" >0</h4>
                        <hr>
                        <p>Doktor</p>
                    </div>
                </div> --}}
                {{-- <div class="row">
                    <div class="col counter text-center angka">
                        <h4 class="count" data-target="4">0</h4>
                        <hr>

                        <p>Guru Besar</p>
                    </div>
                    <div class="col counter text-center angka">
                        <h4 class="count"  data-target="3">0</h4>
                        <hr>

                        <p>Doktor</p>
                    </div>
                </div> --}}
            </div>
        </section>
        <!-- ======= Header ======= -->
        {{-- @include('layouts.bottom') --}}
        <!-- End Header -->

        {{-- <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">
                @include('layouts.contact')
                </div>
            </section>
        <!-- End Contact Section --> --}}
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('layouts.footer')
    <!-- End Footer -->

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
    <script>
        const counters = document.querySelectorAll(".count");

        const options = {
            threshold: 1,
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    if (!entry.target.classList.contains("counted")) {
                        entry.target.classList.add("counted");
                        const target = +entry.target.getAttribute("data-target");
                        let count = 0;
                        const updateCount = () => {
                            const increment = target / 200; // Speed of count animation
                            if (count < target) {
                                count += increment;
                                entry.target.innerText = Math.ceil(count);
                                setTimeout(updateCount, 1);
                            } else {
                                entry.target.innerText = target;
                            }
                        };
                        updateCount();
                    }
                }
            });
        }, options);

        counters.forEach((counter) => {
            observer.observe(counter);
        });
    </script>
    <!-- Template Main JS File -->
    <script src="{{ asset('assets') }}/js/main.js" type="module"></script>
    @livewireScripts
</body>

</html>
