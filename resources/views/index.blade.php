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
        @include('layouts.topbar')
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
                        <div
                            class="col-lg-8 col-md-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                            <video id="myVideo" autoplay muted loop>
                                <source
                                    src="{{ asset('assets/ed1c37e6-f529-45b6-8034-a06732efcf00.mp4') }}"type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
                <ul>
                    <li><a>Prestasi</a></li>
                    <div style="border-left:3px solid #fff;height:auto; width: 20px"></div>
                    <li><a>Kanal Youtube</a></li>
                    <div style="border-left:3px solid #fff;height:auto; width: 20px"></div>
                    <li><a>Pembelajaran Daring</a></li>
                    <div style="border-left:3px solid #fff;height:auto; width: 20px"></div>
                    <li><a>ITH Care</a></li>
                </ul>
            </section>
        @endif
    @endisset

    <main id="main">
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
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2 style="color: {{ $page->alt1 }}">{{ __('cek.berita-1') }}</h2>
                    {{-- <h3><span style="color: {{$page->alt1}}">{{__('cek.berita-2')}}</span>.</h3> --}}
                </div>
                <div class=" d-flex justify-content-between align-items-center">
                    @foreach ($postsNews as $item)
                        <div class="article ">
                            <div class="body text-center">
                                <a href="{{ route('show', $item->slug) }}">
                                <h4 style="color:rgba(16, 110, 234)">
                                    {{ $language == 'id' ? \Str::words($item->title, 10, '...') : \Str::words($item->engtitle, 10, '...') }}
                                </h4>
                                </a>

                                <span style="font-size: 12px;"><i class="bi bi-calendar4"
                                        style="margin-right: .5rem;"></i>{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                                @if ($language == 'id')
                                    <p>{!! \Str::words($item->desc, 50) !!}</p>
                                @else
                                    <p>{!! \Str::words($item->eng, 50) !!}</p>
                                @endif
                            </div>
                            <span class="text-start">tags: <strong>
                                    @foreach ($item->tags as $tags)
                                        @if ($language == 'id')
                                            {{ $tags->name }}
                                        @else
                                            {{ $tags->engtitle }}
                                        @endif
                                    @endforeach
                                </strong></span>
                        </div>
                    @endforeach
                    {{-- @foreach ($postsNews as $item)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="member">
                                <div class="member-img">
                                    <a href="{{ route('show', $item->slug) }}">
                                        <div
                                            style="height: 300px; background-image: url({{ asset('storage/' . $item->cover) }}); background-size: cover">
                                        </div>
                                    </a>
                                    <div class="social">
                                        <a class="mb-1" href=""
                                            style="width: 200px; background: {{ $page->alt1 }};">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <a href="{{ route('show', $item->slug) }}">
                                        <h4>{{ $language == 'id' ? \Str::words($item->title, 7, '...') : \Str::words($item->engtitle, 7, '...') }}
                                        </h4>
                                    </a>
                                    <p>{{ $item->cover }}</p>
                                    <span>
                                        @if ($language == 'id')
                                            {!! \Str::words($item->desc, 30) !!}
                                        @else
                                            {!! \Str::words($item->eng, 30) !!}
                                        @endif
                                    </span>
                                    <hr class="mt-4">
                                    <div>
                                        <div class="social-links align-items-center" style="font-size: 12px">
                                            <a>
                                                <i>Tags :</i>&ensp;
                                            </a>
                                            @foreach ($item->tags as $tags)
                                                <a class="mx-1" style="color: {{ $page->alt1 }};"
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
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach --}}
                </div>

            </div>
        </section>
        <!-- End Team Section -->
        <section id="numbers">
            <h2 class="text-center"
                style="font-family: 'Roboto Mono', monospace; color:white;text-shadow: 2px 2px #2f2f2f;">ITH DALAM ANGKA
            </h2>
            <div
                class="container border-light d-flex flex-column justify-content-around   border border-5 border-primary">
                <div class="row">
                    <div class="col text-center angka">
                        <h4>535</h4>
                        <hr>
                        <p>Mahasiswa</p>
                    </div>
                    <div class="col text-center angka">
                        <h4>10</h4>
                        <hr>

                        <p>program studi</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center angka">
                        <h4>3</h4>
                        <hr>

                        <p>Guru Besar</p>
                    </div>
                    <div class="col text-center angka">
                        <h4>4</h4>
                        <hr>

                        <p>Doktor</p>
                    </div>
                </div>
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

    <!-- Template Main JS File -->
    <script src="{{ asset('assets') }}/js/main.js"></script>

</body>

</html>
