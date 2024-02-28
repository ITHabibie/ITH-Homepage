<header id="header" class="">
    
<section class="top-bar d-flex align-items-center" style="background-color: hsl(197deg 81% 16%); font-size: 12px;">
    <div class="container d-flex justify-content-center justify-content-md-between">
        @isset($topbar)
        <div class="useful-links d-flex align-items-center">
            <a href="#" class="link d-flex align-items-center ms-4">{{$topbar->calonMahasiswa}}</a>
            <a href="#" class="link d-flex align-items-center ms-4">{{$topbar->mahasiswa}}</a>
            <a href="#" class="link d-flex align-items-center ms-4">{{$topbar->alumni}}</a>
            <a href="#" class="link d-flex align-items-center ms-4">{{$topbar->staff_dosen}}</a>
        </div>
        <div class="useful-links d-flex align-items-center">
            <div class="lang d-flex">
                <a href="{{route('lang','id')}}">
                    <!-- <img class="rounded border border-secondary" src="{{$language == 'id' ? asset('assets/img/id.png'):asset('assets/img/en.png')}}" style="height: 15px;"> -->
                    <img class="rounded border border-secondary" src="{{asset('assets/img/id.png')}}" style="height: 20px;">
                </a>
                <a href="{{route('lang','en')}}">
                    <!-- <img class="rounded border border-secondary" src="{{$language == 'id' ? asset('assets/img/id.png'):asset('assets/img/en.png')}}" style="height: 15px;"> -->
                    <img class="rounded border border-secondary" src="{{asset('assets/img/en.png')}}" style="height: 20px;">
                </a>
            </div>
            <a href="#" class="link d-flex align-items-center ms-4">{{$topbar->virtual_tour}}</a>
            <a href="#" class="link d-flex align-items-center ms-4">{{$topbar->InformasiPublik}}</a>
            <a href="#" class="link d-flex align-items-center ms-4">{{$topbar->Direktori}}</a>
            <nav class="navbar" id="navbar">
                <ul>
                    <li class="dropdown">
                        <a class="link" style="font-size: 12px;" href="">{{$topbar->Layanan}} <i class="bi bi-caret-down-fill"></i></a>
                        <ul>
                            <li>
                                <a href="http://lppm-pm.ith.ac.id/">LPPM-PM ITH</a>
                            </li>
                            <li>
                                <a href="http://od.ith.ac.id">DOKUMEN TERBUKA </a>
                            </li>
                            <li>
                                <a href="http://digilab.ith.ac.id/">DIGITAL LIBRARY ITH</a>
                            </li>
                            <li>
                                <a href="http://simpel.ith.ac.id/">LMS ITH</a>
                            </li>
                            <li>
                                <a href="http://cintasatudata.ith.ac.id/">CINTA Satu Data</a>
                            </li>
                            <li>
                                <a href="http://siakad.ith.ac.id/">SIAKAD</a>
                            </li>
                            <li>
                                <a href="http://sister.kemdikbud.go.id/">SISTER</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    @endisset
</section>


    <div class="container d-flex align-items-center justify-content-between">
        <a  id="beranda" style="cursor: pointer;" onclick="tes(event)">
            <img src="{{asset('assets/img/LogoITHH.svg')}}" style="width: 15rem; object-fit: cover">
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                @foreach ($navbarmenu->whereIn('format',[0,1])->where('view','1')->sortBy('order') as $loop1)
                @if ($loop1->format == 1)
                <li class="dropdown"><a href="#" style="color:white;" class="{{ request()->is($loop1->slug.'/*') ? 'active' : '' }}"><span>{{$language == 'id' ? $loop1->indtitle : $loop1->engtitle}}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        @foreach ($navbarmenu->where('ops1',$loop1->id)->whereIn('format',[2,3])->where('view','1')->sortBy('order') as $loop2)
                        @if ($loop2->format == 3)
                        {{-- <li class="dropdown"><a href="#"><span>{{$language == 'id' ? $loop2->indtitle : $loop2->engtitle}}</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                @foreach ($navbarmenu->where('ops2',$loop2->id)->whereIn('format',[4])->where('view','1')->sortBy('order') as $loop3)
                                <li>
                                    <a href="{{ route('showNav', [$loop1->slug, $loop3->slug]) }}">
                                        {{$language == 'id' ? $loop3->indtitle : $loop3->engtitle}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>  --}}
                        @else
                        <li>
                            <a href="{{ route('showNav', [$loop1->slug, $loop2->slug]) }}">{{$language == 'id' ? $loop2->indtitle : $loop2->engtitle}}</a>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </li>
                @else
                {{-- <li>
                    <a class="nav-link {{ request()->is($loop1->slug) ? 'active' : '' }}" href="{{ route('showNavs', [$loop1->slug]) }}">{{$language == 'id' ? $loop1->indtitle : $loop1->engtitle}}</a>
                </li> --}}
                @endif
                @endforeach
                <li>
                    <a style="color:white;" href="https://admission.ith.ac.id">Tautan<i class="bi bi-arrow-up-right-square-fill"></i></a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header>

