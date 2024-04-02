@extends('layouts.pages')

@section('content')
    <style>
        h1,
        p {
            font-family: 'Roboto', sans-serif;
        }

        .hero-docs {
            margin-top: 6rem;
        }

        .table-profil img {
            object-fit: cover;
            width: 53vw;
        }

        @media (min-width: 502px) and (max-width:768px) {
            .table-profil img {
                width: 27rem;
            }
        }

        @media(min-width:404px) and (max-width:501px) {
            .table-profil img {
                width: 22rem;
            }
        }


        @media (min-width:337px) and (max-width:403px) {
            .table-profil img {
                width: 17rem;
            }
        }

        @media(min-width:769px) and (max-width:992px) {

            .hero-docs {
                margin-top: 2rem;
            }
        }

        @media(min-width:508px) and (max-width:767px) {
            .hero-docs {
                margin-top: 8rem;
            }
        }

        @media (max-width:336px) {
            .hero-docs {
                margin-top: 4.2rem;
            }

            .table-profil img {
                width: 12rem;
            }
        }
        @media (max-width:1062px){
            .section{
                flex-wrap:wrap;
            }
        }
        
    </style>
    <div class="hero-docs text-center align" style="">
        <div class="hero-text"
            style="background-color: rgba(0, 0, 0, 0.8);background-position:center;background-image:url({{ asset('assets/img/new_university.svg') }}); padding:2rem 1.5rem 2rem .5rem;color:white;">
            <h1>Calon Mahasiswa</h1>
            <p>Informasi untuk calon mahasiswa</p>
        </div>
    </div>
    <main class="main-table container">
        <h1>Selamat Datang,</h1>
        <p>Para Calon Mahasiswa Institut Teknologi Bacharuddin Jusuf Habibie. Temukan informasi seputar ITH melalui halaman
            berikut.</p>
        {{-- TODO: Fetch datanya dari DB --}}
        <div class="section d-flex justify-content" style="gap:2rem; ">
            <div class="informasiKampus  align-items-center"  >
                <h3 style="font-size:1.5rem">Informasi Kampus</h3>
                <div class="content" style="padding:.5rem; background-color:#D9D9D9">
                    <img style="width: 100%" src="{{ asset('assets/img/ik.png') }}" alt="Gedung Kampus 1">
                    <p>Anda akan menemukan semua yang perlu Anda ketahui tentang fasilitas, program akademik, kegiatan
                        ekstrakurikuler, dan berbagai informasi kampus ya....</p>
                    <a href="#">Lihat Selengkapnya <i class="bi bi-chevron-right"></i></a>
                </div>
            </div>
            <div class="JalurSeleksi  align-items-center" >
                <h3 style="font-size:1.5rem">Jalur Seleksi</h3>
                <div class="content" style="padding:.5rem; background-color:#D9D9D9">
                    <img style="width: 100%" src="{{ asset('assets/img/js.png') }}" alt="Gedung Kampus 1">
                    <p>Dengan berbagai pilihan jalur, kami memastikan bahwa setiap calon mahasiswa memiliki kesempatan
                        untuk menemukan jalur yang sesuai dengan bak....</p>
                    <a href="#">Lihat Selengkapnya <i class="bi bi-chevron-right"></i></a>
                </div>
            </div>
            <div class="InformasiKotaParepare  align-items-center" >
                <h3 style="font-size:1.5rem">Informasi Kota Parepare</h3>
                <div class="content" style="padding:.5rem; background-color:#D9D9D9">
                    <img style="width: 100%" src="{{ asset('assets/img/ikp.png') }}" alt="Gedung Kampus 1">
                    <p>Memulai kehidupan kampus sebagai mahasiswa ITH berarti bahwa kamu akan menghabiskan waktumu untuk
                        tinggal di Kota Parepare. Berikut hal-hal ya...</p>
                    <a href="#">Lihat Selengkapnya <i class="bi bi-chevron-right"></i></a>
                </div>
            </div>
            <div class="Fasilitas  align-items-center" >
                <h3 style="font-size:1.5rem">Fasilitas Kampus</h3>
                <div class="content" style="padding:.5rem; background-color:#D9D9D9">
                    <img style="width: 100%" src="{{ asset('assets/img/fa.png') }}" alt="Gedung Kampus 1">
                    <p>Institut TeknologiBacharuddin Jusuf Habibie(ITH) menyediakan berbagai fasilitas kampus untuk
                        mendukung dan menunjang kegiatan yang ad...</p>
                    <a href="#">Lihat Selengkapnya <i class="bi bi-chevron-right"></i></a>
                </div>
            </div>

        </div>

        </div>
    @endsection
