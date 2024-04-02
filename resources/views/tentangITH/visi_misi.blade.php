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
    <div class="hero-docs text-center align" style="">
        <div class="hero-text"
            style="background-color: rgba(0, 0, 0, 0.8);background-position:center;background-image:url({{ asset('assets/img/new_university.svg') }}); padding:2rem 1.5rem 2rem .5rem;color:white;">
            <h1>Visi & Misi</h1>
            <p>Tentang ITH / Visi & Misi</p>
        </div>
    </div>
    <main class="main-table container d-flex" style="gap:5rem;">
        <div class="table-profil" style="text-align: justify; border-top:0.188rem solid #F18516;padding:1rem;">
            <h1>Visi :</h1>
            <p style="padding-left: 3.125rem;">Menjadi Institut yang unggul, memiliki daya saing, berstandar internasional
                yang menjunjung tinggi martabat kemanusiaan, berwawasan lingkungan dan berbasis enterpreneurship.</p>
            <h1>Misi :</h1>
            <p style="padding-left: 3.125rem;">1. Menghasilkan lulusan yang profesional, berjiwa wirausaha, berkarakter dan
                berstandar Internasional.</p>
            <p style="padding-left: 3.125rem;">2. Menghasilkan karya nyata bidang ilmu pengetahuan yang inovatif dan berguna
                bagi masyarakat.</p>
            <p style="padding-left: 3.125rem;">3. Menyelengarakan pendidikan teknologi yang berkualitas.</p>
            <p style="padding-left: 3.125rem;">4. Terciptanya manajemen yang handal untuk tatakelola transparan dan
                terpercaya.</p>
            <p style="padding-left: 3.125rem;">5. Melakukan Pembinaan sumberdaya manusia yang berkesinambungan dalam
                menunjang pengembangan profesionalisme.</p>
        </div>

        {{-- TODO: Fetch datanya dari DB --}}
        <div class="side-table" style="width:30%; font-family:Fira Sans, sans;">
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
    @endsection
