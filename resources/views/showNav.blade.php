<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ITH - {{Str::ucfirst($slug)}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('storage')}}/{{$contact->logo }}" rel="icon">


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
      <div class="container" style="margin-bottom: -1.2rem">
        <div class="section-title">
          <h3>{{ $judul }}</h3>
        </div>
      </div>
    </section>

    <style>
      
      
@media only screen and (min-width: 300px) {
  /* For tablets: */
  .team .card-body img {
        width: 70%;
      }
}
@media only screen and (min-width: 950px) {
  /* For desktop: */
  .team .card-body img {
        width: auto;
      }
}
@media only screen and (min-width: 1200px) {
  
}
    </style>
    
    <section id="team" class="team">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="card shadow p-3 mb-5 bg-white rounded" style="">
              <div class="overflow-hidden text-center">
                  @if ($post->img)
                  <img src="{{ asset('storage/'.$post->img) }}" class="card-img-top" style="width: 70%">
                  @endif
              </div>
              <div class="card-body" style="">
                {{-- <h5 id="textblue" class="card-title fw-bold fs-3">{{ $judul }}</h5> --}}
                <p>{!!$isi!!}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
   
    <!--End::Content-->

  </main>

  <!-- ======= Footer ======= -->
  @include('layouts.footer')
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="background: {{$page->alt1}}"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  {{-- <script src="{{asset('assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
  <script src="{{asset('assets')}}/vendor/glightbox/js/glightbox.min.js"></script>
  {{-- <script src="{{asset('assets')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script> --}}
  {{-- <script src="{{asset('assets')}}/vendor/php-email-form/validate.js"></script> --}}
  {{-- <script src="{{asset('assets')}}/vendor/purecounter/purecounter.js"></script>
  <script src="{{asset('assets')}}/vendor/swiper/swiper-bundle.min.js"></script> --}}

  <!-- Template Main JS File -->
  <script src="{{asset('assets')}}/js/main.js"></script>

</body>

</html>
