<!-- <section id="topbar" class="d-flex align-items-center" style="background: {{$page->alt1}}">
    <div class="container d-flex justify-content-center justify-content-md-between">
        @isset($topbar)
        <div class="contact-info d-flex align-items-center">
            <i class="d-flex align-items-center ms-4"><a href="#">{{$topbar->calonMahasiswa}}</a></i>
            <i class="d-flex align-items-center ms-4"><a href="#">{{$topbar->mahasiswa}}</a></i>
            <i class="d-flex align-items-center ms-4"><a href="#">{{$topbar->alumni}}</a></i>
            <i class="d-flex align-items-center ms-4"><a href="#">{{$topbar->staff_dosen}}</a></i>
        </div>
        
        <i class="d-flex align-items-center ms-4"><a href="#">{{$topbar->virtual_tour}}</a></i>
        <i class="d-flex align-items-center ms-4"><a href="#">{{$topbar->InformasiPublik}}</a></i>
            <i class="d-flex align-items-center ms-4"><a href="#">{{$topbar->Direktori}}</a></i>
            <i class="d-flex align-items-center ms-4"><a href="#">{{$topbar->Layanan}}</a></i>
            <a href="{{$contact->twitter}}" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="{{$contact->facebook}}" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="{{$contact->instagram}}" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="{{$contact->linkedin}}" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
        @endisset
    </section> -->

<section class="top-bar d-flex align-items-center" style="background: {{$page->alt1}}">
    <div class="container d-flex justify-content-center justify-content-md-between">
        @isset($topbar)
        <div class="useful-links d-flex align-items-center">
            <a href="#" class="link d-flex align-items-center ms-4">{{$topbar->calonMahasiswa}}</a>
            <a href="#" class="link d-flex align-items-center ms-4">{{$topbar->mahasiswa}}</a>
            <a href="#" class="link d-flex align-items-center ms-4">{{$topbar->alumni}}</a>
            <a href="#" class="link d-flex align-items-center ms-4">{{$topbar->staff_dosen}}</a>
        </div>
        <div class="useful-links d-flex align-items-center">
            <a href="#" class="link d-flex align-items-center ms-4">{{$topbar->virtual_tour}}</a>
            <a href="#" class="link d-flex align-items-center ms-4">{{$topbar->InformasiPublik}}</a>
            <a href="#" class="link d-flex align-items-center ms-4">{{$topbar->Direktori}}</a>
            <nav class="navbar" id="navbar">
                <ul>
                    <li class="dropdown">
                        <a class="link" href="">{{$topbar->Layanan}} <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li>
                                <a href="">lorem</a>
                            </li>
                            <li>
                                <a href="">ipsum</a>
                            </li>
                            <li>
                                <a href="">dolor sit amet</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    @endisset
</section>