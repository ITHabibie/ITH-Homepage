<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ITH - Post</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets')}}/img/favicon.png" rel="icon">
  <link href="{{asset('assets')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  {{-- <link href="{{asset('assets')}}/vendor/aos/aos.css" rel="stylesheet"> --}}
  <link href="{{asset('assets')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('assets')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('assets')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  {{-- <link href="{{asset('assets')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet"> --}}
  {{-- <link href="{{asset('assets')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> --}}

  <!-- Template Main CSS File -->
  <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.6.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
      /* For mobile phones: */
[class*="cols-"] {
  width: 90% !important;
}
  @media only screen and (min-width: 600px) {
  /* For tablets: */
  .cols-s-2 {width: 16.66%;}
  .cols-s-1 {width: 8.33%;}
  .cols-s-3 {width: 25%;}
  .cols-s-4 {width: 33.33%;}
  .cols-s-5 {width: 41.66%;}
  .cols-s-6 {width: 50%;}
  .cols-s-7 {width: 58.33%;}
  .cols-s-8 {width: 66.66%;}
  .cols-s-9 {width: 75%;}
  .cols-s-10 {width: 83.33%;}
  .cols-s-11 {width: 91.66%;}
  .cols-s-12 {width: 90% !important; margin-bottom: 1px !important;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .cols-1 {width: 8.33%;}
  .cols-2 {width: 16.66%;}
  .cols-3 {width: 25% !important; margin-bottom: 1px !important;}
  .cols-4 {width: 33.33%;}
  .cols-5 {width: 41.66%;}
  .cols-6 {width: 50%;}
  .cols-7 {width: 58.33%;}
  .cols-8 {width: 66.66%;}
  .cols-9 {width: 75%;}
  .cols-10 {width: 83.33%;}
  .cols-11 {width: 91.66%;}
  .cols-12 {width: 100%;}
}
  </style>

</head>

<body>
    @php
        $language = __('cek.lang');
    @endphp
    @if ($page->top_bar == 1)
      <!-- ======= Top Bar ======= -->
      @include('layouts.topbar')
    @endif

    <!-- ======= Header ======= -->
    @include('layouts.header')
    <!-- End Header -->

  <main id="main" class="">

    <!--Begin::Content-->
    <section class="breadcrumbs">
        <div class="row">
            <h5 style="font-weight: bold" class="text-dark text-center fs-4">Search</h5>
            <form action="{{route('search')}}" method="get">
              <div class="input-group mb-3" style="padding: 0px 20%;">
                <input type="text" class="form-control"  name="search" required>
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                </div>
              </div>
            </form>
          </div>
  </section>
    @isset($titles)
    <div class="section-title" style="margin-bottom:  -30px">
        <h3 class="mt-5"><span>Search By </span> {{$language == 'id' ? 'Kategori '.$titles->category->name:'Category '.$titles->category->engtitle}}</h3>
    </div>
    @endisset
  <section id="team" class="team">
    <div class="container" style="min-height: 700px">
        <div class="row aos-init aos-animate" data-aos="fade-left">

            @forelse ($serchPost as $info)
                <div class="col-lg-4 col-sm-12 col-md-6">
                  <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="member">
                      <div class="member-img">
                        @if ($info->cover)
                            <img src="{{asset('storage/'.$info->cover)}}" class="card-img-top" style="width: 100%; height: 300px">
                        @endif
                        <div class="social">
                          <a href="#" class="cols-3 cols-s-12" ><i  style="font-size: 12px" class="bi bi-people"> {{ $info->user->name }}</i></a>
                          <a href="#" class="cols-3 cols-s-12" ><i  style="font-size: 12px" class="bi bi-calendar"> {{  date('d M Y', strtotime($info->tanggal)) }}</i></a>
                          <a href="#" class="cols-3 cols-s-12" ><i  style="font-size: 12px" class="bi bi-eye"> 1</i></a>
                        </div>
                      </div>
                      <div class="member-info">
                        <h4>
                          <a href="{{ route('show', $info->slug) }}" class="fs-3" id="textblue" style="font-size: 19px !important">
                            {{$language == 'id' ? \Str::words($info->title, 8, '...'):\Str::words($info->engtitle, 8, '...')}}
                          </a>
                        </h4>
                        <small class="text-muted ml-auto">{{ Carbon\Carbon::parse($info->created_at)->diffForHumans()}}</small>
                      </div>
                    </div>
                  </div>
                </div>
            @empty
                <i>
                    <center>
                        {{$language == 'id' ? 'Hasil tidak ditemukan ...':'Not found ...'}}
                    </center>
                </i>
            @endforelse
        {{ $serchPost->links() }}


        </div>
    </div>
  </section>

  <!-- End About Section -->

    <!--End::Content-->

  </main>

  <!-- ======= Footer ======= -->
  @include('layouts.footer')
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="background: {{$page->alt1}}"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  {{-- <script src="{{asset('assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
  {{-- <script src="{{asset('assets')}}/vendor/glightbox/js/glightbox.min.js"></script> --}}
  {{-- <script src="{{asset('assets')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script> --}}
  {{-- <script src="{{asset('assets')}}/vendor/php-email-form/validate.js"></script> --}}
  {{-- <script src="{{asset('assets')}}/vendor/purecounter/purecounter.js"></script>
  <script src="{{asset('assets')}}/vendor/swiper/swiper-bundle.min.js"></script> --}}

  <!-- Vendor JS Files -->
  <script src="https://dsti.unhas.ac.id/ith/bizland/vendor/aos/aos.js"></script>
  <script src="https://dsti.unhas.ac.id/ith/bizland/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://dsti.unhas.ac.id/ith/bizland/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="https://dsti.unhas.ac.id/ith/bizland/vendor/php-email-form/validate.js"></script>
  <script src="https://dsti.unhas.ac.id/ith/bizland/vendor/purecounter/purecounter.js"></script>
  <script src="https://dsti.unhas.ac.id/ith/bizland/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://dsti.unhas.ac.id/ith/bizland/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="https://dsti.unhas.ac.id/ith/bizland/vendor/waypoints/noframework.waypoints.js"></script>


  <!-- Template Main JS File -->
  <script src="{{asset('assets')}}/js/main.js"></script>


</body>

</html>
