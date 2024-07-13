@extends('layouts.pages')
@section('content')

<style>
  @media (max-width: 391px) {
      .hero-docs { margin-top: 4rem; }
      .col-md-3 {
          width: 100%;
          margin-right: 0;
          margin-bottom: 1rem;
          display: flex;
          justify-content: center;
      }
      img {
          width: 100%;
          object-fit: cover;
          display: block;
      }
  }

  @media (min-width: 392px) and (max-width: 768px) {
      .hero-docs { margin-top: 6rem; }
      .col-md-3 {
          width: 100%;
          margin-right: 0;
          margin-bottom: 1rem;
          display: flex;
          justify-content: center;
      }
      img {
          width: 100%;
          object-fit: cover;
          display: block;
      }
  }

  @media (min-width: 769px) and (max-width: 991px) {
      .hero-docs { margin-top: 6.2rem; }
      .col-md-3 {
          width: 50%;
          margin-right: 0;
          margin-bottom: 1rem;
          display: flex;
          justify-content: center;
      }
      img {
          width: 100%;
          object-fit: cover;
          display: block;
      }
  }

  .deskripsi {
      font-family: "Istok Web", sans-serif;
      font-weight: 400;
      font-style: normal;
  }
</style>


   <div class="hero-docs text-center align" style="margin-top: 6.2rem; ">
        <div class="hero-text"
            style="background-color: rgba(0, 0, 0, 0.8);background-position:center;background-image:url({{ asset('assets/img/new_university.svg') }}); padding:2rem 1.5rem 2rem .5rem;color:white;">
            <h1>Prestasi</h1>
            <p>Tentang ITH / Prestasi
        </div>
    </div>

    <main class="main-table d-flex" style="gap:2rem;">
        <div class="container">
            <div class="row">
              <div class="col-md-3 ms-0 me-5 mb-4">
                <div class="" style="width: 254px; height: 255px;">
                    <img src="{{ asset('assets/img/prestasi/Gambar WhatsApp 2024-06-16 pukul 09.17.27_a2c3fba2 1.png')}}" class="card-img-top" alt="...">
                    <div class="card-body text-start p-0">
                      <p class="deskripsi card-text fw-bold mt-1">JUARA 2 AJANG LOMBA CRC (CELEBES ROBOT CONTEST) TAHUN 2024</p>
                    </div>
                  </div>
              </div>
              <div class="col-md-3 me-5 ms-2 mb-4">
                <div class="" style="width: 254px; height: 255px;">
                    <img src="{{ asset('assets/img/prestasi/Gambar WhatsApp 2024-06-16 pukul 23.32.01_c37a629d 1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body text-start p-0">
                      <p class="deskripsi card-text fw-bold mt-1">JUARA 2 LOMBA POSTER DIGITAL TINGKAT MAHASISWA/UMUM 2024</p>
                    </div>
                  </div>
              </div>
              <div class="col-md-3 me-5 ms-2 mb-4">
                <div class="" style="width: 254px; height: 255px;">
                    <img src="{{ asset('assets/img/prestasi/Gambar WhatsApp 2024-06-16 pukul 09.17.33_326f0ad9 1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body text-start p-0">
                      <p class="deskripsi card-text fw-bold mt-1">JUARA 2 LOMBA DESAIN INFOGRAFIS TAHUN 2023</p>
                    </div>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 me-5 ms-2 mb-4">
                <div class="" style="width: 254px; height: 255px;">
                    <img src="{{ asset('assets/img/prestasi/Gambar WhatsApp 2024-06-16 pukul 23.33.00_d506b02e 1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body text-start p-0">
                      <p class="deskripsi card-text fw-bold mt-1">JUARA PRESTASI 2 LOMBA POSTER DIGITAL TINGKAT MAHASISWA/UMUM 2023</p>
                    </div>
                  </div>
              </div>
              <div class="col-md-3 me-5 ms-2 mb-4">
                <div class="" style="width: 254px; height: 255px;">
                    <img src="{{ asset('assets/img/prestasi/Gambar WhatsApp 2024-06-16 pukul 23.36.29_f42f2c46 1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body text-start p-0">
                      <p class="deskripsi card-text fw-bold mt-1">JUARA HARAPAN 1 LOMBA CIPTA PANTUN TINGKAT MAHASISWA/UMUM 2023</p>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        {{-- TODO: Fetch datanya dari DB --}}
        <div class="side-table" style="width: 27%; font-family:Fira Sans, sans;">
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

@endsection
