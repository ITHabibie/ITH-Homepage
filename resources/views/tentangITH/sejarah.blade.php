@extends('layouts.pages')

@section('content')
    <style>
        .hero-docs {
            margin-top: 6rem;
        }

        .table-profil img {
            object-fit: contain;
            width: 53vw;
            max-height: 22rem;
            max-width: 107%;
        }

        @media (min-width: 502px) and (max-width:768px) {
            .table-profil img {
                width: 27rem;
            }
            .table-profil {
                font-size: 80%;
            }
        }

        @media(min-width:404px) and (max-width:501px) {
            .table-profil img {
                width: 22rem;
            }
            .table-profil {
                font-size: 80%;
            }
        }


        @media (min-width:337px) and (max-width:403px) {
            .table-profil img {
                width: 17rem;
            }
            .table-profil {
                font-size: 80%;
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
            .table-profil {
                font-size: 80%;
            }
        }
    </style>
    <div class="hero-docs text-center align" style="">
        <div class="hero-text"
            style="background-color: rgba(0, 0, 0, 0.8);background-position:center;background-image:url({{ asset('assets/img/new_university.svg') }}); padding:2rem 1.5rem 2rem .5rem; color:white;">
            <h1>Sejarah</h1>
            <p>Tentang ITH / Sejarah</p>
        </div>
    </div>
    <main class="main-table container d-flex" style="gap:2rem;">
        <div class="table-profil" style="text-align: justify;">
            <img src="{{asset('assets\img\sejarah.png')}}" align="right" style="width: 27.25rem; height: 36.625rem; padding-left: 1.25rem; padding-top: 0rem;" alt="Sejarah">
            <p>Berdirinya Institut Teknologi B.J. Habibie (ITH) di Kota Parepare melalui perjuangan panjang Bapak Walikota Parepare (Dr. H.M. Taupan Pawe) dan Tim  yang menjawab keraguan orang akan lahirnya Perguruan Tinggi Negeri di Kota Parepare.</p>
            <p>Ide pendirian ITH, bermula ketika Presiden Republik Indonesia ke 6  Bapak Susilo Bambang Yudoyono berkunjung ke Kota Parepare,  pada hari Kamis tanggal 20 Februari 2014 lalu.  Bapak Presiden bermalam di Rumah Jabatan Walikota  dan ditempat  itulah Bapak Walikota Parepare berdiskusi dengan beliau dan melontarkan ide-ide cemerlang untuk menjadikan B.J.Habibie sebagai sumber inspirasi, kemudian tercetuslah keinginan Bapak Walikota (H.M. Taupan Pawe) untuk mendirikan Institut Teknologi Habibie ditempat kelahirannya. Inisiatif itu sambut baik oleh Bapak Presiden dan memanggil Menteri Pendidikan dan Kebudayaan RI (Prof. Dr. Muhammad Nuh) untuk menindaklanjuti keinginan Walikota Parepare.</p>
            <p>Berdirilah INSTITUT TEKNOLOGI B.J. HABIBIE (ITH), kemudian berubah nama menjadi INSTITUT TEKNOLOGI  BACHARUDDIN JUSUF HABIBIE (ITBH)  melalui Peraturan Presisden Nomor 152 Tahun 2014, tanggal 17 Oktober 2014 yang ditandatangani oleh Presiden  H. Susilo Bambang Yudoyono.</p>
            <p>Setelah melalui proses yang panjang dalam izin operasionalnya, maka terbitlah peraturan kelembagaan dan tata kerja melalui Peraturan Menteri Menteri Pendidikan, Kebudayaan, Riset dan Teknologi Republik Indonesia, Nomor 21 Tahun 2021 pada tanggal 4 Agustus 2021,  Organisasi dan Tata Kerja. Maka mulai tanggal 14 Agustus 2021 secara resmi Institut Teknologi B.J. Habibie mulai beroperasi.</p>
            <p>Unggul dalam pengembangan ilmu pengetahuan dan teknologi terapan berstandar internasional yang berwawasan lingkungan dan berbasis enterpreneurship, merupakan inti dari visi Institut Teknologi B.J. Habibie di Kota Parepare.</p>
            <p>Institut Teknologi B.J. Habibie (ITBH)  merupakan  Perguruan  Tinggi  Negeri  (PTN)  penyelenggara pendidikan  Akademis  berlokasi  di  Kota  Parepare Provinsi Sulawesi Selatan. Izin pendirian berdasarkan Peraturan Presiden Nomor 152 Tahun 2014,  tanggal 17 Oktober 2014.</p>
            <p>Penetapan Rektor melalui Keputusan Menteri Pendidikan, Kebudayaan, Riset dan Teknologi Republik Indonesi, Nomor 67373/MPK.A/KP.07.00/2021, tentang Pengangkatan Rektor Institut Teknologi Bacharuddin Jusuf Habibie Periode 2021-2025. Tanggal 04 Oktober 2021.</p>
            <p>Pada awal operasionalnya ITBH menyelenggarakan pendidikan strata satu (S1) bergelar akademik sarjana sesuai dengan keilmuannya. Saat ini Institut Teknologi B.J. Habibie memiliki 3(tiga) program studi, yaitu Program Studi Matematika, Program Studi Teknik Informatika dan Program Studi Sistem Informasi serta mengembangkan program studi baru.</p>
            <p>Kampus ITBH saat ini  berdiri di atas tanah seluas 8,16 Ha yang merupakan  Gedung DPRD dan Gedung Pemuda yang dialihkan menjadi Kampus ITBH berlantai dua dan telah dilengkapi dengan fasilitas memadai, terdiri dari ruang Rektorat, ruang  kuliah, laboratorium Komputer, Perpustkaaan dan fasilitas penunjang lainnya. Persiapan kampus terpadu dilokasi pengembagan ke 3 seluas 34 ha.</p>
            <p>Dalam melaksanakan fungsinya, maka ITBH membekali mahasiswa dengan sikap, pengetahuan dan keterampilan dan kecakapan hidup,  sesuai dengan capaian pembelajaran yang ditetapkan. Proses belajar mengajar mengacu kurikulum berbasis KKNI yang menitikberatkan pada pendalaman keilmuan dan memberikan  pengalaman  belajar baik didalam negeri maupun diluar negeri sesuai  capaian  pembelajaran yang dituju dan membekali juga lulusan untuk berwirausaha.</p>
            <p>AKU DATANG DENGAN CINTA MENUNTUT ILMU DAN TEKNOLOGI, AKU BELAJAR TEKUN,  AKU BERHASIL MENJADI SARJANA PRODUKTIF YANG UNGGUL DAN ENTREPNEURSHIP</p>
            <p>Jadilah mata air jernih yang memberikan kehidupan kepada sekitarmu</p>
            <p>(B.J. Habibie)</p>
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
