@extends('layouts.pages')

@section('content')
    <style>
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
    </style>
    <div class="hero-docs text-center align" style="margin-top: 6.2rem; ">
        <div class="hero-text"
            style="background-color: rgba(0, 0, 0, 0.8);background-position:center;background-image:url({{ asset('assets/img/new_university.svg') }}); padding:2rem 1.5rem 2rem .5rem;color:white;">
            <h1>Profil Singkat</h1>
            <p>Tentang ITH / Profil Singkat</p>
        </div>
    </div>
    <main class="main-table container d-flex" style="gap:2rem;">
        <div class="table-profil" style="text-align: justify;">
            <img src="{{asset('assets\img\kampus1.png')}}" align="left" style="width: 18.75rem; height: 16.3125rem; padding-top: 0.625rem; padding-right: 1.25rem; padding-bottom: 0.625rem;" alt="Kampus 1">
            <p>Institut Teknologi Bacharuddin Jusuf Habibie (ITH) sebuah perguruan tinggi di Parepare, Sulawesi Selatan, Indonesia. Institut ini dinamai sesuai dengan nama tokoh besar Indonesia, yaitu Prof. Dr. Ing. Bacharuddin Jusuf Habibie Presiden Republik Indonesia ke -3 yang juga merupakan seorang insinyur terkemuka.
            </p><p>ITH memiliki visi untuk menjadi institut yang unggul, memiliki daya saing, dan berstandar tinggi. Institut Teknologi Bachruddin Jusuf Habibie memberikan peranan penting dalam bidang pengetahuan, teknologi dan seni untuk kemajuan masyarakat dan pembangunan.</p><p>
            ITH didirikan berdasarkan Peraturan Presiden Nomor 152 Tahun 2014 tentang Pendirian Institut Teknologi Bachruddin Jusuf Habibie. Rektor saat ini adalah Prof. Dr. Ir. Ansar Suyuti, SH, MT, IPU, ASEAN.Eng., yang dilantik pada tanggal 4 Oktober 2021 untuk masa bakti 2021-2025. ITH hadir sebagai satu-satunya Institut
            Teknologi Negeri di wilayah Timur Indonesia, sebagai upaya pemerintah Indonesia untuk memfasilitasi warga negara khususnya wilayah timur untuk mendapatkan pendidikan tinggi.
            <img src="{{asset('assets\img\kampus2.png')}}" align="right" style="width: 18.75rem; height: 16.3125rem; padding-left: 0.9375rem; padding-top: 0.9375rem;" alt="Kampus 2"></p><p>
            Saat ini ITH memiliki jumlah 535 mahasiswa, 3 dosen doktor , 3 guru besar dan 23 dosen muda milenial. ITH menawarkan berbagai program studi dan jurusan. Yang saat ini memiliki dua jurusan yaitu Jurusan Sains yang terdiri dari lima prodi diantarany Matematika, Sains Aktuaria, Sains Data, Biokteknologi serta Sains Informasi
            dan Jurusan Teknologi Produksi & Industri yang terdiri dari lima prodi diantaranya Ilmu komputer, Teknologi Pangan, Teknik Metalurgi, Teknik Sistem Energi, dan Teknik Sipil. Almamater ITH memiliki warna dasar jingga dengan logo ITH berbentuk gerigi. Melalui kepemimpinan yang kuat, ITH bertujuan untuk menghasilkan sarjana
            muda yang ahli di bidang engineering.</p>
        </div>

        {{-- TODO: Fetch datanya dari DB --}}
        <div class="side-table" style="width:30%; font-family:Fira Sans, sans;">
            <p style="font-size:2rem; padding:.5rem; font-size:1.5rem; color:white;background-color: hsl(197deg 81% 16%);border-radius:2px; ">
                <i class="bi bi-chevron-left"></i>
                Tentang ITH
            </p>
            <nav>
                <ul>
                    @foreach ($navbarmenu->whereIn('ops1', 1)->sortBy('order') as $loop1)
                    <p >
                        <a style="color:black;" href="{{route('showNav', ['tentang-ith', $loop1->slug])}}">
                            <i class="bi bi-chevron-right"></i>
                                {{$loop1->indtitle}}
                            </a>
                        </p>
                    @endforeach
                </ul>
            </nav>
        </div>
    @endsection
