@extends('layouts.pages')
@section('content')
    <style>
        .main-table {
            width: 70%;
        }
            .kos{
                margin-top: 2rem;
                width: 100%;
                height:50%;

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

            .main-table {
                width: 100%;
            }
        }
    </style>
    <div class="hero-docs text-center align" style="">
        <div class="hero-text"
            style="background-color: rgba(0, 0, 0, 0.8);background-position:center;background-image:url({{ asset('assets/img/new_university.svg') }}); padding:2rem 1.5rem 2rem .5rem;color:white;">
            <h1>Kehidupan Kampus</h1>
            <p class="title">Kehidupan Kampus / Fasilitas Kampus</p>
        </div>
    </div>
    <main style="padding:1rem; display:flex;">
        <div class="main-table">
            <h6>Fasilitas Kampus yang ada di ITH antara Lain:</h6>
            <br>
            <div style="display:flex;">
                <h3 style="font-family: Istok Web; font-weight:bold; margin-right:2rem;">KAMPUS 1 </h3>
                <hr style="color:#F18516; width:80%; height:.4rem;opacity: 100%">
            </div>
            <h3 style="font-family: Istok Web; font-weight:bold; margin-right:2rem;">LAB KOMPUTER</h3>
            <div class="container w-75 fw-bold bg-light">
                <div id="carouselExampleDark" class="carousel carousel-dark slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner text-secondary">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="{{ asset('assets/img/corousel/Gambar WhatsApp 2024-02-29 pukul 20.12 1.png') }}"
                                class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="{{ asset('assets/img/corousel/Gambar WhatsApp 2024-02-29 pukul 20.12 5.png') }}"
                                class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="{{ asset('assets/img/corousel/Gambar WhatsApp 2024-02-29 pukul 20.12 4.png') }}"
                                class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <img src="{{ asset('assets/img/corousel/Gambar WhatsApp 2024-02-29 pukul 20.12 3.png') }}"
                                class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="{{ asset('assets/img/corousel/Gambar WhatsApp 2024-02-29 pukul 20.12 2.png') }}"
                                class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <br>
            <div style="display:flex;">
                <h3 style="font-family: Istok Web; font-weight:bold; margin-right:2rem;">KAMPUS 2 </h3>
                <hr style="color:#F18516; width:79%; height:.4rem; opacity:100%;">
            </div>
            <h3 style="font-family: Istok Web; font-weight:bold; margin-right:2rem;">RUANG KELAS</h3>
            <div class="container w-75 fw-bold bg-light">
                <div id="carouselExampleDark" class="carousel carousel-dark slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                    </div>
                    <div class="carousel-inner text-secondary">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="{{ asset('assets/img/corousel/Group 80.png') }}" class="d-block w-100"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div>
                            {{--<img src="{{ asset('assets/img/corousel/Gambar WhatsApp 2024-02-29 pukul 20.12 1.png') }}"--}}
                            <a href="{{'assets/dokumen/DAFTAR_KOST.pdf'}}" download><img src="{{asset('assets/img/kost.png')}}" class="kos"></a>
            <p>Bingung cari kost-kostan di area kampus? <a href="{{asset('assets/dokumen/DAFTAR_KOST.pdf')}} " download>Klik Disini </a> untuk daftar kost di area sekitar kampus!</p>
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
