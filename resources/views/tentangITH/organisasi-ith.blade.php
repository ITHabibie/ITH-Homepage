@extends('layouts.pages')
@section('content')
    <style>

.table-profil img {
        width: 100%;
        height: auto;
    }
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
    </style>
   <div class="hero-docs text-center align" style="margin-top: 6.2rem; ">
        <div class="hero-text"
            style="background-color: rgba(0, 0, 0, 0.8);background-position:center;background-image:url({{ asset('assets/img/new_university.svg') }}); padding:2rem 1.5rem 2rem .5rem;color:white;">
            <h1>Organisasi</h1>
            <p>Tentang ITH / Organisasi</p>
        </div>
    </div>

    {{-- <main class="main-table container d-flex" style="gap:2rem;">
        <div class="table-profil" style="text-align: justify;">
            <img src="{{ asset('assets/img/organisasi/Permendikbudristek Nomor 21 Tahun 2021 ttg OTK ITBH_page-0021 1.png') }}" alt="haloo">
        </div>

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
    </main> --}}

<div class="container">
    <div class="row justify-content-between mt-3">
        <div class="col-md-8">
            <div class="table-profil" style="text-align: justify;">
                <img src="{{ asset('assets/img/organisasi/Permendikbudristek Nomor 21 Tahun 2021 ttg OTK ITBH_page-0021 1.png') }}" alt="haloo">
            </div>
        </div>

        <div class="col-md-3">
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
            </div>
        </div>
    </div>
</div>

@endsection
