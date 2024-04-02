@extends('layouts.pages')

@section('content')
    <style>
        .hero-docs {
            margin-top: 6rem;
        }

        .table-profil img {
            object-fit: contain;
            width: 53vw;
            max-width: 106%;
        }

        .lirik {
            object-fit: contain;
            max-width: 100%;
        }

        @media (min-width: 502px) and (max-width:768px) {
            .table-profil img {
                width: 27rem;
                max-width: 100%;
            }
            .table-profil {
                font-size: 80%;
            }
        }

        @media(min-width:404px) and (max-width:501px) {
            .table-profil img {
                width: 22rem;
                max-width: 100%;
            }
            .table-profil {
                font-size: 80%;
            }
        }


        @media (min-width:337px) and (max-width:403px) {
            .table-profil img {
                width: 17rem;
                max-width: 100%;
            }
            .table-profil {
                font-size: 80%;
            }
        }

        @media(min-width:769px) and (max-width:992px) {

            .hero-docs {
                margin-top: 2rem;
            }
            .table-profil {
                font-size: 80%;
            }
        }

        @media(min-width:508px) and (max-width:767px) {
            .hero-docs {
                margin-top: 8rem;
            }
            .table-profil {
                font-size: 80%;
            }
        }

        @media (max-width:336px) {
            .hero-docs {
                margin-top: 4.2rem;
            }
            .table-profil {
                font-size: 80%;
            }

            .table-profil img {
                width: 12rem;
                max-width: 100%;
            }
        }
    </style>
    <div class="hero-docs text-center align" style="">
        <div class="hero-text"
            style="background-color: rgba(0, 0, 0, 0.8);background-position:center;background-image:url({{ asset('assets/img/new_university.svg') }}); padding:2rem 1.5rem 2rem .5rem;color:white;">
            <h1>Hymne & Mars</h1>
            <p>Tentang ITH / Hymne & Mars</p>
        </div>
    </div>

    <main class="main-table container d-flex" style="gap:2rem;">
        <div class="table-profil scroller" style="text-align: justify; scrollbar-color: rgb(239, 164, 44) #dedede;">
            <p>Institut Teknologi Bacharuddin Jusuf Habibie memiliki Lagu Hymne dan Mars yang masih digunakan hingga saat ini. Berikut lirik lagu hymne dan Mars ITH :</p>
            <br>
            <h2>Hymne ITH</h2>
            <br>
            <div>
                <img src="{{asset('assets\img\hymne.png')}}" align="right" style="width: 20rem; height: 12.5rem; padding-top: 0.625rem; padding-right: 0.625rem; padding-bottom: 1.25rem;" alt="hymne">
            </div>
            <div class="lirik" style="width: 30rem; height: 18.75rem; overflow: auto;">
                <p>Bapak teknologi bangsa</p>
                <p>Menjadi panutan bersama</p>
                <p>Sebagai patriot teknoktrat bangsa</p>
                <p>Kembangkan teknologi dengan makna cinta</p>
                <br>
                <p>Almamater ITH tercinta</p>
                <p>Di tanganmulah kebangkitan bangsa</p>
                <p>Cita-cita mulia</p>
                <p>Membangun peradaban jaya</p>
                <br>
                <p>Institut teknologi B.J Habibie</p>
                <p>Dari kota cinta membangun bakti</p>
                <p>Menyatukan ilmu dan amal</p>
                <p>Demi kejayaan bersama</p>
                <br>
                <p>Institut Teknologi B.J Habibie</p>
                <p>Bersamamu kami mengabdi</p>
                <p>Institut Teknologi B.J Habibie</p>
                <p>Bersamamu kami berbakti</p>
            </div>
            <br><br>
            <h2>Mars ITH</h2>
            <br>
            <div>
                <img src="{{asset('assets\img\mars.png')}}" align="right" style="width: 20rem; height: 12.5rem; padding-top: 0.625rem; padding-right: 0.625rem; padding-bottom: 1.25rem;" alt="mars">
            </div>
            <div class="lirik" style="width: 30rem; height: 18.75rem; overflow: auto;">
                <p>Institut Teknologi B.J Habibie</p>
                <p>Menjunjung tinggi martabat kemanusiaan</p>
                <p>Berwawasan lingkungan berjiwa enterpteneur</p>
                <p>Berlandaskan cinta membangun nusa bangsa</p>
                <br>
                <p>Institut Teknologi B.J Habibie</p>
                <p>Kembangkan jiwa teknologi dengan cinta</p>
                <p>Mewujudkan semangat B.J Habibie</p>
                <p>Bapak teknologi bangsa</p>
                <br>
                <p>Menghasilkan lulusan unggul dan inovatif</p>
                <p>Berkarakter dan beradab</p>
                <p>Hasilkan karya nyata ilmu pengetahuan</p>
                <p>Bermanfaat bagi nusa dan bangsa</p>
                <br>
                <p>Jayalah... ITH</p>
                <p>Kembangkan ilmu dan teknologi</p>
                <p>Majulah... ITH</p>
                <p>Jadi kebanggaan Indonesia</p>
                <p>Institut Teknologi B.J Habibie</p>
            </div>
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
