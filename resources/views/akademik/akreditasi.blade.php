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
            <h1>Profil Singkat</h1>
            <p>Akademik / Akreditasi Program Studi</p>
        </div>
    </div>
    <main class="main-table container d-flex" style="gap:2rem;">
      
            <div class="table">
                <p>Akreditasi dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT)</p>
                <table>
                    <th colspan="5">Dokumen Perencanaan</th>
                    <tr>
                        <td class="text-center">No. </td>
                        <td>Nama Program studi</td>
                        <td>Link Download Akreditasi </td>
                    </tr>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Sains Data</td>
                        <td><a href={{ asset('assets/dokumen/Surat_SK_Akreditasi_Minimal_Sains_Data.pdf') }} download>Unduh</a></td>
                    </tr>
                    
                </table>
            </div>
            {{-- TODO: Fetch datanya dari DB --}}
            <div class="side-table" style="width:30%; font-family:Fira Sans, sans;">
                <p
                style="font-size:2rem; padding:.5rem; font-size:1.5rem; color:white;background-color: hsl(197deg 81% 16%);border-radius:2px; ">
                <i class="bi bi-chevron-left"></i>
                Akademik
            </p>
            <nav>
                <ul>
                    @foreach ($navbarmenu->whereIn('ops1', 5)->sortBy('order') as $loop1)
                        <p>
                            <a style="color:black;" href="{{ route('showNav', ['akademik', $loop1->slug]) }}">
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
