                    @extends('layouts.pages')
                    @section('content')
                        <style>
                            .main-table {
                                width: 70%;
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
                                <h1>Perpustakaan</h1>
                                <p class="title">Kehidupan Kampus / Perpustakaan</p>
                            </div>
                        </div>
                        <main style="padding:1rem; display:flex;">
                            <div class="main-table">
                                <p>Perpustakaan Institut Teknologi Bachruddin Jusuf Habibie, OPAC (Online Public Access
                                    Catalog) merupakan pusat pengetahuan dan informasi yang penting bagi civitas akademika
                                    ITH. Dengan koleksi yang kaya akan literatur ilmiah dan teknis, perpustakaan ini menjadi
                                    sumber daya yang tak ternilai bagi mahasiswa, dosen, dan peneliti. Melalui
                                    layanan-layanan seperti peminjaman buku, konsultasi referensi, dan ruang baca yang
                                    nyaman, perpustakaan ini mendukung pengembangan akademik dan penelitian di ITH.

                                    OPAC berperan dalam menyediakan akses terhadap sumber daya informasi dan pengetahuan
                                    melalui layanan seperti Electronic Books (E-Books) , yang berkontribusi pada peningkatan
                                    kualitas lulusan dengan memperluas wawasan dan penguasaan keilmuannya.

                                    Untuk informasi lebih lengkap, silahkan mengunjungi website Perpustakaan Pusat ITH :
                                    <a href="digilab.ith.ac.id">digilab.ith.ac.id</a>
                                </p>

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
                                                <a style="color:black;"
                                                    href="{{ route('showNav', ['tentang-ith', $loop1->slug]) }}">
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
