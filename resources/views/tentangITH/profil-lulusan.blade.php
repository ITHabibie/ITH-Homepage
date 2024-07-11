@extends('layouts.pages')

@section('content')
    <style>
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
    </style>
    <div class="hero-docs text-center align" style="">
        <div class="hero-text"
            style="background-color: rgba(0, 0, 0, 0.8);background-position:center;background-image:url({{ asset('assets/img/new_university.svg') }}); padding:2rem 1.5rem 2rem .5rem;color:white;">
            <h1>Profil Singkat</h1>
            <p>Kehidupan Kampus / Fasilitas Kampus</p>
        </div>
    </div>
    <main style="padding:1rem;">

        <h1>Jurusan Teknik Produksi Industri</h1>
        <br>


        <ol>
            <h3><strong>
                    <li>Profil Lulusan Prodi Ilmu Komputer yaitu:</li>
                </strong></h3>
            <p><strong>Robotika</strong></p>
            <p>
                lulusan yang mampu menjadi akademisi dan penliti robotika, mendalami perkembangan teknologi untuk
                nenciptakan
                inovasi. Mereka memiliki keterampilan pemrograman tingkat tinggi dan pemahaman mendalam tentang kontrol
                otomatis, memberikan kontribusi dalam pengembangan robotika di berbagai sektor
            </p>


            <p><strong>Digital Developer</strong></p>
            <p>
                Sebagai digital developer, lulusan Ilmu komputer menciptakan solusi perangkat lunak revolusioner. Mereka
                menguasai pemrograman dn desain aplikasi, mendukung transformasi digital dan perusahaan industri
            </p>

            <p><strong>Entrepeneur</strong></p>

            <p>
                Lulusan ini muncul sebagai entrepeneur dengan visi teknologi yang unggul. Mereka mendirikan perusahaan
                berbasis
                IT, mengintegrasikan inovasi digital dalam bisnis, dan menciptakan nilai tambah melalui solusi kreatif
            </p>

            <h3><strong>
                    <li>Profil Lulusan Prodi Ilmu Teknologi Pangan yaitu:</li>
                </strong></h3>

            <p><strong>Konsultan Pangan</strong></p>
            <p>
                Sebagai seorang konsultan pangan, para lulusan diharapkan mampu memiliki merumuskan strategi dengan
                menggunakan metode dan potensi sumber daya lokal, baik masyarakat dan sumber pangan yang tersedia untuk
                meningkatkan kapasitas dalam menghadapi tantangan krisis pangan dan menjamin ketersediaan pangan
            </p>

            <p><strong>Pengusaha</strong></p>
            <p>
                Mampu menerapkan prinsip ilmiah dalam merumuskan, menganalisis dan memecahkan permasalahan dalam bidang
                pangan, khususnya lingkungan daerah dan global pada umumnya serta menerapkan etika agribisnis berwawasan
                lingkungan dan berkearifan lokal
            </p>

            <p><strong>Manajer Usaha</strong></p>
            <p>
                Mampu mengaktualisasikan potensi diri untuk bekerjasama dalam tim yang multidisiplin dalam
                mengimplementasikan industri pangan yang modern untuk tujuan efektifitas dan efisien berlandaskan cinta
            </p>

            <h3><strong>
                    <li>Profil Lulusan Prodi Teknik Metalurgi yaitu:</li>
                </strong></h3>

            <p><strong>Praktisi Metalurgi</strong></p>
            <p>
                Profesi ini memiliki peran untuk melakukan perencanaan, pelaksanaan, pengawan, dan evaluasi pekerjaan bidang
                metalurgi, serta melakukan rekayasa proses manufaktur untuk perbaikan kualitas produk logam
            </p>

            <p><strong>Akademisi</strong></p>
            <p>
                Selain profesi praktisi, lulusan program studi Teknik Metalurgi memiliki peluang beasr untuk menjadi seorang
                pendidik dan fasilitator yang kreatif, inovatif, dan mampu menguasai serta mengembangkan kajian Teknik
                metalurgi melalui kegiatan riset.

            </p>

            <p><strong>Peneliti Rekayasa Material</strong></p>
            <p>
                Mampu memilih dan merancang paduan logam dan non logam sesuai kebutuhan kondisi operasi, merancang material
                komposit sesuai kebutuhan, serta mampu merancang perlakuan panas dan permukaan pada logam
            </p>

            <p>
            <h3>
                <li>Adapun Profil Lulusan Teknik Sistem Energi yaitu:</li>
            </h3>
            </p>

            <p><strong>Konsultan</strong></p>
            <p>
                Sebagai seorang konsultan, lulusan diharapkan mampu mendesain pembangkit listrik dari berbagai sumber energi
                serta dapat memberikan pengawasan pada proses pembangunannya serta menganalisa masalah dan/atau potensi
                energi
            </p>

            <p><strong>Pengusaha</strong></p>
            <p>
                Mampu mengembangkan usaha dari potensi-potensi energi yang ada dan menciptakan lapangan kerja serta
                bertanggung jawab dalam pengelolaan suatu unit usaha berdasrkan analisa informasi dan evaluasi hasil kerja
            </p>

            <p><strong>Akademisi/Peneliti</strong></p>
            <p>
                Mampu merumuskan, menganalisa, dan mengkaji permasalahan di bidang sistem energi sehingga dapat diperoleh
                solusi sebagai dasar pengambilan keputusan yang dapat bekerja di lapangan dan/atau di laboratorium
            </p>

            <p>
            <h3><strong>
                    <li>Profil Lulusan Prodi Teknik Sipil yaitu:</li>
                </strong></h3>
            </p>

            <p><strong>Konsultan Perencanaan</strong></p>
            <p>
                Mampu merencanakan, merancang, mengkonstruksi manajemen dan pemeliharaan di bidang teknik sipil, serta mampu
                mengambil keputusan yang tepat dan memberikan petunjuk dalam memilih berbagai alternatif solusi dalam bidang
                teknik sipil
            </p>

            <p><strong>Akademisi/Peneliti</strong></p>
            <p>
                Mampu menyusun rencana penelitian, melakukan penelitian dan menyusun laporannya serta kemampuan
                menyebarluaskan pengetahuan dan gagasan
            </p>

            <p><strong>Entrepeneur</strong></p>
            <p>
                Mampu mengelola proyek secara profesional dan bertanggung jawab dan mengembangkan usaha jasa di bidang
                teknik sipil, serta penerapan keilmuan dalam merekayasa/desain kekuatan bangunan berdasarkan Norma, Standar,
                Pedoman dan Ketentuan (NSPK) yang berlaku serta kemajuan teknologi di bidang teknik sipil
            </p>

            <p>
            <h3><strong>
                    <li>Profil Lulusan Program Studi Teknik Arsitektur Yaitu:</li>
                </strong></h3>
            </p>
            <p><strong>Konsultan Arsitektur</strong></p>
            <p>
                Mampu melakukan perencanaan, pengawasan konstruksi bangunan tropis/vernakular/etnis. Mampu melakukan
                perencanaan kota maritim berbasis teknologi. Mampu melakukan organisasi/manajemen proyek.
            </p>

            <p><strong>Desain Interior</strong></p>
            <p>
                Mampu merancang ruang dalam dengan bahan dan ramah lingkungan, dan menerapkan konsep efisiensi energi. Mampu
                menerapkan nilai-nilai desain nusantara/vernakular/etnis dan mengintegrasikan pada desain interior
            </p>


            <p><strong>Desain Lansekap</strong></p>
            <p>
                Mampu merancang ruang luar dengan mempergunakan material lokal, dan mengintegrasikan elemen perancangan
                dengan lingkungan alam sekitar. Mampu menerapkan konsep tematik lokal dengan mempergunakan elemen
                tradisional untuk memberi ciri khas yang kreatif dan autentik
            </p>

        </ol>


        <h1>Jurusan Sains</h1>
        <ol>
            <p><strong>
                    <h3>
                        <li>Profil Lulusan Prodi Matematika yaitu:</li>
                    </h3>
                </strong></p>

            <p><strong>Akademisi dan Peneliti</strong></p>
            <p>
                Lulusan Matematika siap menjadi akademisi dan peneliti yang mendalami teori matematika, mendorong kemajuan
                ilmu pengetahuan dengan kontribusi penelitian terbaru
            </p>

            <p><strong>Praktisi Industri</strong></p>
            <p>
                Sebagai praktisi industri, lulusan Matematika menhadirkan keahlian matematisnya dalam mengatasi tantangan
                industri, memberikan solusi efisien dan inovatif di berbagai sektor bisnis dan teknologi.
            </p>


            <p><strong>Manager</strong></p>
            <p>
                Lulusan Matematika berperan sebagai manajer yang memanfaatkan kecakapan analitis untuk mengelola sumber daya
                dengan efektif, memberikan keputusan strategis, dan memimpin tim dalam lingkungan bisnis yang dinamis
            </p>

            <p><strong>
                    <h3>
                        <li>Profil Lulusan Prodi Sains Aktuaria yaitu:</li>
                    </h3>
                </strong></p>
            <p><strong>Aktuaris</strong></p>
            <p>
                Profesi Aktuaris mampu menggunakan data historis, model statistik, dan pengetahuan tentang faktor-faktor
                kelautan untuk mengembangkan model prediktif yang dapat membantu dalam mengelola risiko dan merancang
                kebijkana asuransi yang efektif
            </p>

            <p><strong>Akdemisi</strong></p>
            <p>
                Selain Profesi Aktuaris, lulusan program studi sains Aktuaria memiliki peluang besar untuk menjadi seorang
                pendidik dan fasilitator kreatif, inovatif ayng menguasai dan mengembangkan materi aktuaris melalui kegiatan
                riset
            </p>

            <p><strong>Risk Manager</strong></p>
            <p>
                Profesi ini berperan penting untuk menemukan akar permasalan suatu fenomena aktuaria di bidang pengelolaan
                risiko maupun investasi dengan risk analysis yang diprepresentasikan oleh Ruin Probability, Pricing and
                Valuation, dan Actuarial Computing based on Big Data untuk Sains Aktuaria

            </p>

            <P><strong>
                    <h3>
                        <li>Profil Lulusan Sains Data yaitu:</li>
                    </h3>
                </strong></P>
            <p><strong>Data Scientist</strong></p>
            <p>
                Seorang Data Scientist bertanggung jawab terhadap data yang ada di perusahaan serta memastikan infrastruktur
                data perusahaan yang baik, analisis data, hingga menyusun metode machine learning yang efektif

            </p>

            <p><strong>Data Analyst</strong></p>
            <p>
                Profesi Data Analyst memiliki kemampuan untuk meneliti informasi dari sejumlah data dan menerjemahkannya.
                Profesi ini bekerja dimulai dengan raw data yang perlu dibersihkan, dimanipulasi, dan diolah sehingga bisa
                dianalisis untuk menghasilkan insight yang bermanfaat bagi perusahaan
            </p>

            <p><strong>Data Engineer</strong></p>
            <p>
                Seorang Data Engineer berperan membangun sistem infrastruktur, mengatur dan mengelola proses data dan
                mengembangkan arsitektur data warehouse dalam bidang industri, pertanian dan kelautan
            </p>

            <p><strong>
                    <h3>
                        <li>Profil Lulusan Prodi Bioteknologi yaitu:</li>
                    </h3>
                </strong></p>
            <p><strong>Biotecpreneur</strong></p>
            <p>
                Profesi ini berperan sebagai wirausaha yang mampu menciptakan peluang, membuka lapangan kerja, mengembangkan
                jejarin dan merealisasikan kegiatan usaha berbasis sumber daya alam hayati untuk menghasilkan produkp
                bioteknologi, yaitu pada bidang yang didukung dengan penguasaan teknologi digital.
            </p>

            <p><strong>Quality Control</strong></p>
            <p>
                manajemen pengelolaan proses produksi produk bioteknologi, berbasis sumberdaya alam hayati untuk
                meningkatkan mutu sesuai dengan komptensi yang dimiliki, seperti penguasaan serta keterampilan dalam
                penguasaan serta keterampilan dalam menggunakan instrument, metode, analisis, cermat, dan bertanggung jawab
                terhadap kualitas mutu produk

            </p>

            <p><strong>Risk Manager</strong></p>
            <p>
                peluang untuk menapaki jenjang karir sebagai peneliti di bidang bioteknologi secara mandiri maupun
                berkelompok untuk menghasilkan riset yang unggul dan kompetitif, guna meningkatkan mutu kehidupan
                bermasyarakat
            </p>

            <p><strong>
                    <h3>
                        <li>Profil Sistem Informasi yaitu:</li>
                    </h3>
                </strong></p>
            <p><strong>Multimedia Developer</strong></p>

            <p>
                Lulusan yang dapat bekerja dengan merancang, mengembangkan dan mengelola fiture multimedia, seperti teks,
                suara, grafis, foto digital, pemodelan dimensi/3 Dimensi , animasi dan video untuk membuat produk-produk
                seperti website, aplikasi mobile atau program komputer multimedia.
            </p>

            <p><strong>Mobile Application Programmer</strong></p>
            <p>
                Lulusan yang menggunakan teknologi informasi dan komunikasi untuk menjalankan bisnis baik itu komersial,
                sosial, pemerintah, atau perusahaan yang menggunakan teknologi secara digital
            </p>

            <p><strong>Digital Entrepeneur</strong></p>
            <p>
                Lulusan yang mampu menggunakan teknologi informasi dan komunikasi untuk menjalankan bisnis baik itu
                komersial, sosial, pemerintah atau perusahaan yang menggunakan teknologi secara digital
            </p>








        </ol>
    </main>
@endsection
