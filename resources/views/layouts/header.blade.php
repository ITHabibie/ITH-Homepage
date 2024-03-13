<header id="header" class="">

    <section id="topbars" class="top-bar d-flex align-items-center"
        style="background-color: hsl(197deg 81% 16%); font-size: 12px;">
        <div class="container d-flex justify-content-center justify-content-md-between">
            @isset($topbar)
                <div class="useful-links d-flex align-items-center">
                    <a href="#" class="link d-flex align-items-center ms-4">{{ $topbar->calonMahasiswa }}</a>
                    <a href="#" class="link d-flex align-items-center ms-4">{{ $topbar->mahasiswa }}</a>
                    <a href="#" class="link d-flex align-items-center ms-4">{{ $topbar->alumni }}</a>
                    <a href="#" class="link d-flex align-items-center ms-4">{{ $topbar->staff_dosen }}</a>
                    <a href="#" class="link d-flex align-items-center ms-4">{{ $topbar->orangtua }}</a>
                </div>
                <div class="useful-links d-flex align-items-center">
                    <div class="lang d-flex">
                        <a href="{{ route('lang', 'id') }}">
                            <!-- <img class="rounded border border-secondary" src="{{ $language == 'id' ? asset('assets/img/id.png') : asset('assets/img/en.png') }}" style="height: 15px;"> -->
                            <img class="rounded border border-secondary" src="{{ asset('assets/img/id.png') }}"
                                style="height: 20px;">
                        </a>
                        <a href="{{ route('lang', 'en') }}">
                            <!-- <img class="rounded border border-secondary" src="{{ $language == 'id' ? asset('assets/img/id.png') : asset('assets/img/en.png') }}" style="height: 15px;"> -->
                            <img class="rounded border border-secondary" src="{{ asset('assets/img/en.png') }}"
                                style="height: 20px;">
                        </a>
                    </div>
                    <a href="#" class="link d-flex align-items-center ms-4">{{ $topbar->virtual_tour }}</a>
                    <a href="#" class="link d-flex align-items-center ms-4">{{ $topbar->InformasiPublik }}</a>
                    <a href="#" class="link d-flex align-items-center ms-4">{{ $topbar->Direktori }}</a>
                    <nav class="navbar" id="navbar">
                        <ul>
                            <li class="dropdown">
                                <a class="link" style="font-size: 12px;" href="">{{ $topbar->Layanan }} <i
                                        class="bi bi-caret-down-fill"></i></a>
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
            @endisset
        </div>
    </section>
    {{-- <div class="container d-flex align-items-center justify-content-between">
        <a href="{{ route('homepage') }}" style="cursor: pointer;">
            <img src="{{ asset('assets/img/LogoITHH.svg') }}" style="width: 14rem; object-fit: cover">
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                @foreach ($navbarmenu->whereIn('format', [0, 1])->where('view', '1')->sortBy('order') as $loop1)
                    @if ($loop1->format == 1)
                        <li class="dropdown">
                            <a href="#" style="color:white;"
                                class="{{ request()->is($loop1->slug . '/*') ? 'active' : '' }}"><span>{{ $language == 'id' ? $loop1->indtitle : $loop1->engtitle }}</span>
                                <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                @foreach ($navbarmenu->where('ops1', $loop1->id)->whereIn('format', [2, 3])->where('view', '1')->sortBy('order') as $loop2)
                                    @if ($loop2->format == 3)
                                        <li class="dropdown"><a
                                                href="#"><span>{{ $language == 'id' ? $loop2->indtitle : $loop2->engtitle }}</span>
                                                <i class="bi bi-chevron-down"></i></a>
                                            <ul>
                                                @foreach ($navbarmenu->where('ops2', $loop2->id)->whereIn('format', [4])->where('view', '1')->sortBy('order') as $loop3)
                                                    <li>
                                                        <a href="{{ route('showNav', [$loop1->slug, $loop3->slug]) }}">
                                                            {{ $language == 'id' ? $loop3->indtitle : $loop3->engtitle }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        <li>
                                            <a
                                                href="{{ route('showNav', [$loop1->slug, $loop2->slug]) }}">{{ $language == 'id' ? $loop2->indtitle : $loop2->engtitle }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    @else --}}
                        {{-- <li>
                    <a class="nav-link {{ request()->is($loop1->slug) ? 'active' : '' }}" href="{{ route('showNavs', [$loop1->slug]) }}">{{$language == 'id' ? $loop1->indtitle : $loop1->engtitle}}</a>
                </li> --}}
                    {{-- @endif
                @endforeach
                <li>
                    <a style="color:white;" href="https://admission.ith.ac.id">Tautan<i
                            class="bi bi-arrow-up-right-square-fill"></i></a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav> --}}
    {{-- </div> --}}

    {{-- desktop --}}
    <div style="background-color:#0660a6; padding:0 4rem;" class="nave nave-desktop d-md-block bg d-sm-none d-md-block d-lg-block" style="padding: 0 15rem; animation:none !important;">
        <nav class="navbar">
            <a href="{{ route('homepage') }}" style="cursor: pointer;">
                <img src="{{ asset('assets/img/LogoITHH.svg') }}" style="width: 14rem; object-fit: cover">
            </a>
            <div>
                <ul   class="navbar-nav navbar-desktop ms-auto d-sm-none d-md-block"
                    style="display:flex !important; flex-direction:row; gap:.5rem; ">
                    @foreach ($navbarmenu->whereIn('format', [0, 1])->where('view', '1')->sortBy('order') as $loop1)
                        @if ($loop1->format == 1)
                            <li >
                                <button style="color:white; font-size:15px;" onclick="tes(this)" class="navbar-toggler" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target={{ "#btn$loop1->id" }}>{{ $language == 'id' ? $loop1->indtitle : $loop1->engtitle }}</button>
                                <i style="color:white;" class="bi bi-chevron-down"></i></a>
                                <div class="collapse container isi-konten navbar-collapse align-items-start"
                                    id={{ "btn$loop1->id" }}>
                                    <p style="font-size:14px; width:40rem; top:8%; border-top: 3px solid #F18516">{{ $loop1->short_desc }}</p>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col"
                                                style="display:grid; grid-template-columns:repeat(2,1fr)">
                                                @foreach ($navbarmenu->where('ops1', $loop1->id)->whereIn('format', [2, 3])->where('view', '1')->sortBy('order') as $loop2)
                                                    @if ($loop2->format == 3)
                                                        <div class="">
                                                            <button type="button"
                                                                data-bs-target={{ "#btn$loop2->id" }}
                                                                data-bs-toggle="collapse"
                                                                style="text-align:start; border-bottom: 1px solid black; width:100% !important; font-size:15px;"
                                                                class="navbar-toggler">{{ $loop2->indtitle }}
                                                                <i class="bi bi-chevron-down"></i>
                                                            </button>
                                                            <div class="collapse navbar-collapse align-items-start"
                                                                id={{ "btn$loop2->id" }}
                                                                style="width: 100% !important; padding:0;">
                                                                <ul style="display:flex; width:100%; flex-direction:column;padding-top: 1rem; gap:.5rem;"
                                                                    class="align-items-start">
                                                                    @foreach ($navbarmenu->where('ops2', $loop2->id)->whereIn('format', [4])->where('view', '1')->sortBy('order') as $loop3)
                                                                        <li style="width: 100%">
                                                                            <a style="border-bottom: 1px solid black"
                                                                                href="{{ route('showNav', [$loop1->slug, $loop3->slug]) }}">
                                                                                {{ $language == 'id' ? $loop3->indtitle : $loop3->engtitle }}
                                                                                <i class="bi bi-chevron-right"></i>
                                                                            </a>
                                                                        </li>
                                                                    @endforeach
                                                                    @foreach ($navbarmenu->where('ops2', $loop2->id)->whereIn('format', [5])->where('view', '1')->sortBy('order') as $loop3)
                                                                        <li style="width:100%;">
                                                                            <a style="border-bottom: 1px solid black"
                                                                                href="{{ route('showNav', [$loop1->slug, $loop3->slug]) }}">
                                                                                {{ $language == 'id' ? $loop3->indtitle : $loop3->engtitle }}
                                                                                <i class="bi bi-chevron-right"></i>

                                                                            </a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <a href="{{ route('showNav', [$loop1->slug, $loop2->slug]) }}"
                                                            style="border-bottom: 1px solid black">
                                                            {{ $loop2->indtitle }}
                                                            <i class="bi bi-chevron-right"></i>
                                                        </a>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="collapse isi-konten navbar-collapse " style="background-color:aliceblue;" id={{ "btn$loop1->id" }}>
                                    <p >{{$loop1->short_desc}}</p>
                                    <ul id="container" style="display:grid; font-size:14px; grid-template-columns: repeat(2,1fr); gap:1rem;">
                                        @foreach ($navbarmenu->where('ops1', $loop1->id)->whereIn('format', [2, 3])->where('view', '1')->sortBy('order') as $loop2)
                                            @if ($loop2->format == 3)
                                                <li>
                                                    <button class="navbar-toggler" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target={{ "#btn$loop2->id" }}><span>{{ $language == 'id' ? $loop2->indtitle : $loop2->engtitle }}</span>
                                                        <i class="bi bi-chevron-down"></i></button>
                                                </li>
                                                <div class="collapse navbar-collapse" id={{ "btn$loop2->id" }}>
                                                    <ul style="display:flex; flex-direction:column;">
                                                        @foreach ($navbarmenu->where('ops2', $loop2->id)->whereIn('format', [4])->where('view', '1')->sortBy('order') as $loop3)
                                                            <li>
                                                                <a
                                                                    href="{{ route('showNav', [$loop1->slug, $loop3->slug]) }}">
                                                                    {{ $language == 'id' ? $loop3->indtitle : $loop3->engtitle }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @else
                                                <li>
                                                    <a
                                                        href="{{ route('showNav', [$loop1->slug, $loop2->slug]) }}">{{ $language == 'id' ? $loop2->indtitle : $loop2->engtitle }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div> --}}
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>
    {{-- mobile --}}
    <div style="background-color:#0660a6;" class="nave nave-mobile d-md-none d-sm-block ">
        <nav class="navbar bg navbar-expand-md">
            <a href="{{ route('homepage') }}" style="cursor: pointer;">
                <img src="{{ asset('assets/img/LogoITHH.svg') }}" style="width: 14rem; object-fit: cover">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#btn">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="btn">
                <ul class="navbar-nav align-items-start ms-auto d-md-none" style="background-color:#FFFFFF">
                    @foreach ($navbarmenu->whereIn('format', [0, 1])->where('view', '1')->sortBy('order') as $loop1)
                        @if ($loop1->format == 1)
                            <li style=" width:100%">
                                <button  class="navbar-toggler nav-judul" type="button" data-bs-toggle="collapse"
                                    data-bs-target={{ "#btn$loop1->id" }} style="font-size:15px !important;">{{ $language == 'id' ? $loop1->indtitle : $loop1->engtitle }}</button>
                                <i class="bi bi-chevron-right"></i></a>
                                <div style="background-color:#D9D9D9;" class="collapse navbar-collapse" id={{ "btn$loop1->id" }}>
                                    <ul class="align-items-start" style="padding-left:1.5rem; display:flex; flex-direction:column">
                                        @foreach ($navbarmenu->where('ops1', $loop1->id)->whereIn('format', [2, 3])->where('view', '1')->sortBy('order') as $loop2)
                                            @if ($loop2->format == 3)
                                            <div class="">
                                                <button type="button"
                                                    data-bs-target={{ "#btn$loop2->id" }}
                                                    data-bs-toggle="collapse"
                                                    style="text-align:start;  width:100% !important;"
                                                    class="navbar-toggler">{{ $loop2->indtitle }}
                                                    <i class="bi bi-chevron-down"></i>
                                                </button>
                                                <div class="collapse navbar-collapse align-items-start"
                                                    id={{ "btn$loop2->id" }}
                                                    style="width: 100% !important; padding:0;">
                                                    <ul style="display:flex; width:100%; flex-direction:column;padding-left:2rem; gap:.5rem;"
                                                        class="align-items-start">
                                                        @foreach ($navbarmenu->where('ops2', $loop2->id)->whereIn('format', [4])->where('view', '1')->sortBy('order') as $loop3)
                                                            <li style="width: 100% ">
                                                                <a 
                                                                    href="{{ route('showNav', [$loop1->slug, $loop3->slug]) }}">
                                                                    {{ $language == 'id' ? $loop3->indtitle : $loop3->engtitle }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                        @foreach ($navbarmenu->where('ops2', $loop2->id)->whereIn('format', [5])->where('view', '1')->sortBy('order') as $loop3)
                                                            <li style="width:100%; ">
                                                                <a 
                                                                    href="{{ route('showNav', [$loop1->slug, $loop3->slug]) }}">
                                                                    {{ $language == 'id' ? $loop3->indtitle : $loop3->engtitle }}

                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            @else
                                                <li>
                                                    <a
                                                        href="{{ route('showNav', [$loop1->slug, $loop2->slug]) }}">{{ $language == 'id' ? $loop2->indtitle : $loop2->engtitle }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>


</header>
<script>
    let count = 0
    let currEl = ''

    function tes(e) {
        count++
        let et = e
        let target = et.getAttribute("data-bs-target").split('')
        let newTarget = target.splice(0, 1).join('')
        let el = document.getElementById(target.join(''))
        if (currEl != '') {
            console.log(currEl)
            console.log(target.join(''))
            let prevEl = document.getElementById(currEl)
            prevEl.classList.remove('show')
        }
        currEl = target.join('')
    }
</script>
