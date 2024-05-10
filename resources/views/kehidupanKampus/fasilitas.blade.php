@extends('layouts.pages')
@section('content')
    <style>
        @media(max-width:391px){

            .hero-docs{margin-top:4rem;}
            img{
                width:8rem;
                object-fit: cover;
            }
        }
        @media (min-width:404px) and (max-width:508px){
            .hero-docs{margin-top:9rem;}
            img{
                width:15rem;
                object-fit: cover;
            }
        }

        .color {
                color:rgb(240, 129, 10)
            }
    </style>
    <div class="hero-docs text-center align" style="">
        <div class="hero-text"
            style="background-color: rgba(0, 0, 0, 0.8);background-position:center;background-image:url({{ asset('assets/img/new_university.svg') }}); padding:2rem 1.5rem 2rem .5rem;color:white;">
            <h1>Profil Singkat</h1>
            <p class="title">Kehidupan Kampus / Fasilitas Kampus</p>
        </div>
    </div>
    <main style="padding:1rem;">
        <h6>Fasilitas Kampus yang ada di ITH antara Lain:</h6>
        {{-- <div class="lab">
            <h1>Lab Komputer</h1>
            <div class="img" style="display:flex; flex-wrap:wrap; justify-content:center;">
                <img src="{{ asset('assets/img/Gambar WhatsApp 2024-02-29 pukul 20.12 1.png') }}">
                <img src="{{ asset('assets/img/Gambar WhatsApp 2024-02-29 pukul 20.12 2.png') }}">
                <img src="{{ asset('assets/img/Gambar WhatsApp 2024-02-29 pukul 20.12 3.png') }}">
                <img src="{{ asset('assets/img/Gambar WhatsApp 2024-02-29 pukul 20.12 4.png') }}">
                <img src="{{ asset('assets/img/Gambar WhatsApp 2024-02-29 pukul 20.12 5.png') }}">
            </div>
        </div>
        <div class="kelas">
            <h1>Ruang Kelas</h1>
            <div class="img" style="display:flex; flex-wrap:wrap; justify-content:center;">
                <img src="{{ asset('assets/img/Gambar WhatsApp 2024-04-01 pukul 21.47 1.png') }}">
                <img src="{{ asset('assets/img/Gambar WhatsApp 2024-04-01 pukul 21.47 2.png') }}">
                <img src="{{ asset('assets/img/Gambar WhatsApp 2024-04-01 pukul 21.47 3.png') }}">
            </div>
        </div> --}}

        {{-- corousel --}}
        <div class="container w-75 fw-bold bg-light">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner text-secondary">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{ asset('assets/img/corousel/Gambar WhatsApp 2024-02-29 pukul 20.12 1.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('assets/img/corousel/Gambar WhatsApp 2024-02-29 pukul 20.12 5.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{ asset('assets/img/corousel/Gambar WhatsApp 2024-02-29 pukul 20.12 4.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="4000">
                    <img src="{{ asset('assets/img/corousel/Gambar WhatsApp 2024-02-29 pukul 20.12 3.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <img src="{{ asset('assets/img/corousel/Gambar WhatsApp 2024-02-29 pukul 20.12 2.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        
        {{-- end corousel --}}
    </main>
@endsection
