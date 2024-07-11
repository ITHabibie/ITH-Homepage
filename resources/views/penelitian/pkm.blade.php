 @extends('layouts.pages')
 @section('content')
     <style>
         .main-table {
             width: 70%;
         }
         .informasiKampus{
             width: 30%;
         }
         .informasiKampus div{
            margin-top: -6rem;
            font-size: 14px;

         }

         @media(max-width:391px) {
             .hero-docs {
                 margin-top: 4rem;
             }

             img {
                 width: 8rem;
                 object-fit: cover;
             }
         }

         @media (min-width:404px) and (max-width:508px) {
             .hero-docs {
                 margin-top: 9rem;
             }

             img {
                 width: 15rem;
                 object-fit: cover;
             }
         }

         .color {
             color: rgb(240, 129, 10);
         }

         @media (max-width:768px) {

             .side-table,
             hr {
                 display: none;
             }
             .informasiKampus{
                 width: 50%;
             }
             .informasiKampus div{
                 font-size: 12px;
             }
             .main-table {
                 width: 100%;
             }
         }
     </style>
     <div class="hero-docs text-center align" style="">
         <div class="hero-text"
             style="background-color: rgba(0, 0, 0, 0.8);background-position:center;background-image:url({{ asset('assets/img/new_university.svg') }}); padding:2rem 1.5rem 2rem .5rem;color:white;">
             <h1>Pengabdian Kepada Masyarakat</h1>
             <p class="title">Penelitian / Pengabdian Kepada Masyarakat</p>
         </div>
     </div>
     <main style="padding:1rem; display:flex;">
         <div class="main-table">
             <p>Kegiatan pengabdian kepada masyarakat di ITH berada di bawah naungan lembaga Penelitian dan Pengabdian
                 Kepada Masyarakat</p>
             <p>Untuk informasi yang lebih lengkap, silahkan mengunjungi website LPPM-PM ITH: <a
                     href="https://lppm-pm.ith.ac.id">lppm-pm.ith.ac.id</a></p>
             <br>
             <div class="section d-flex">
                 <div class="informasiKampus  align-items-center" style="margin-top:2rem;">
                     <h3 style="font-size:1.5rem">Informasi Kampus</h3>
                     <div class="content" style=" background-color:#D9D9D9; ">
                         <img style="width: 100%" src="{{ asset('assets/img/pkm1.png') }}" alt="Gedung Kampus 1">
                             <div style="background-color: rgb(120,120,120,0.5); position:relative; z-index: 9999;">
                                 <p style="font-weight: bold;color: black; padding: .3rem">Pelatihan Pembuatan Media Pembelajaran Interaktif di SMAN 5 Parepare</p>
                                 <p style="padding: .3rem ;font-size: 12px; margin-top: -1.5rem; color:black;">13 Jan 2023 </p>
                         </div>

                     </div>
                 </div>
                 {{--<div class="informasiKampus  align-items-center">--}}
                 {{----}}
                 {{--    <h3 style="font-size:1.5rem">Informasi Kampus</h3>--}}
                 {{--    <div class="content" style="padding:.5rem; background-color:#D9D9D9">--}}
                 {{--        <img style="width: 100%" src="{{ asset('assets/img/ik.png') }}" alt="Gedung Kampus 1">--}}
                 {{--        <p>Anda akan menemukan semua yang perlu Anda ketahui tentang fasilitas, program akademik, kegiatan--}}
                 {{--            ekstrakurikuler, dan berbagai informasi kampus ya....</p>--}}
                 {{--        <a href="#">Lihat Selengkapnya <i class="bi bi-chevron-right"></i></a>--}}
                 {{--    </div>--}}
                 {{--</div>--}}
                 {{--<div class="informasiKampus  align-items-center">--}}
                 {{--    <h3 style="font-size:1.5rem">Informasi Kampus</h3>--}}
                 {{--    <div class="content" style="padding:.5rem; background-color:#D9D9D9">--}}
                 {{--        <img style="width: 100%" src="{{ asset('assets/img/ik.png') }}" alt="Gedung Kampus 1">--}}
                 {{--        <p>Anda akan menemukan semua yang perlu Anda ketahui tentang fasilitas, program akademik, kegiatan--}}
                 {{--            ekstrakurikuler, dan berbagai informasi kampus ya....</p>--}}
                 {{--        <a href="#">Lihat Selengkapnya <i class="bi bi-chevron-right"></i></a>--}}
                 {{--    </div>--}}
                 {{--</div>--}}
             </div>

         </div>
         <div class="side-table" style="width:30%; font-family:Fira Sans, sans;">
             <p
                 style="font-size:2rem; padding:.5rem; font-size:1.5rem; color:white;background-color: hsl(197deg 81% 16%);border-radius:2px; ">
                 <i class="bi bi-chevron-left"></i>
                 Kehidupan Kampus
             </p>
             <nav>
                 <ul>
                     @foreach ($navbarmenu->whereIn('ops1', 72)->sortBy('order') as $loop1)
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
 @endsection
