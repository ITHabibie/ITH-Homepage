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
    </style>
    <div class="hero-docs text-center align" style="">
        <div class="hero-text"
            style="background-color: rgba(0, 0, 0, 0.8);background-position:center;background-image:url({{ asset('assets/img/new_university.svg') }}); padding:2rem 1.5rem 2rem .5rem;color:white;">
            <h1>Profil Singkat</h1>
            <p>Kehidupan Kampus / Fasilitas Kampus</p>
        </div>
    </div>
    <main style="padding:1rem;">
        <h6>Fasilitas Kampus yang ada di ITH antara Lain:</h6>
        <div class="lab">
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
        </div>
    </main>
@endsection
