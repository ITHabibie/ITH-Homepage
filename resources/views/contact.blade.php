<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ITH - {{__('cek.kontak-1')}}</title>
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
          <h3>{{__('cek.kontak-1')}}</h3>
        </div>
      </div>
    </section>
    
   <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        @include('layouts.contact')
      </div>
  </section>
  <!-- End Contact Section -->

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
