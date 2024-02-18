  <!-- ======= Header ======= -->
  <!-- <header id="header" class="d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
          <h1 class="logo">
              <img src="{{asset('assets/img/LogoITHH.svg')}}" style="width: 15rem; object-fit: cover">
  <a href="{{route('homepage')}}">
            <img src="{{ asset('storage')}}/{{$contact->logo }}" style="max-height: 55px">
          </a>
  </h1>
  Uncomment below if you prefer to use an image logo
  <a href="index.html" class="logo"><img src="{{asset('assets')}}/img/logo.png" alt=""></a>
  <nav id="navbar" class="navbar">
              <ul>
  <li><a class="nav-link {{ request()->is('/') ? 'active' : '' }}"  href="{{route('homepage')}}">{{$language == 'id' ? 'Beranda':'Home'}}</a></li>
  @foreach ($navbarmenu->whereIn('format',[0,1])->where('view','1')->sortBy('order') as $loop1)
                  @if ($loop1->format == 1)
                  <li class="dropdown title"><a href="#" class="{{ request()->is($loop1->slug.'/*') ? 'active' : '' }} title"><span>{{$language == 'id' ? $loop1->indtitle : $loop1->engtitle}}
                          </span> <i class="bi bi-chevron-down"></i></a>
                      <ul>
                          </p>
                          @foreach ($navbarmenu->where('ops1',$loop1->id)->whereIn('format',[2,3])->where('view','1')->sortBy('order') as $loop2)
                          @if ($loop2->format == 3)
                          <li class="dropdown">
                              <a href="#"><span>{{$language == 'id' ? $loop2->indtitle : $loop2->engtitle}}</span> <i class="bi bi-chevron-down"></i></a>
                              <ul>
                                  @foreach ($navbarmenu->where('ops2',$loop2->id)->whereIn('format',[4])->where('view','1')->sortBy('order') as $loop3)
                                  <li>
                                      <a href="{{ route('showNav', [$loop1->slug, $loop3->slug]) }}">
                                          {{$language == 'id' ? $loop3->indtitle : $loop3->engtitle}}
                                      </a>
                                  </li>
                                  @endforeach
                              </ul>
                          </li>
                          @else
                          <li>
                              <a href="{{ route('showNav', [$loop1->slug, $loop2->slug]) }}">{{$language == 'id' ? $loop2->indtitle : $loop2->engtitle}}</a>
                          </li>
                          @endif
                          @endforeach
                      </ul>
                  </li>
                  @else
                  <li>
                      <a class="nav-link {{ request()->is($loop1->slug) ? 'active' : '' }}" href="{{ route('showNavs', [$loop1->slug]) }}">{{$language == 'id' ? $loop1->indtitle : $loop1->engtitle}}</a>
                  </li>
                  @endif
                  @endforeach
  <li>
                      <a class="nav-link" target="blank" href="{{ $pmb->url }}">P M B</a>
                  </li>
                  <li>
                      <a class="nav-link {{ request()->is('contacts') ? 'active' : '' }}" href="{{route('contacts')}}">{{__('cek.kontak-1')}}</a>
                  </li>
  <li class="dropdown">
              <a href="#">
                  <img class="rounded border border-secondary" src="{{$language == 'id' ? asset('assets/img/id.png'):asset('assets/img/en.png')}}" style="height: 15px;">
                  <i class="bi bi-chevron-down"></i>
              </a>
            <ul>
                <li>
                    <a href="{{route('lang','id')}}">
                        Indonesia
                    </a>
                </li>
                <li>
                    <a href="{{route('lang','en')}}">
                        English
                    </a>
                </li>
            </ul>
          </li>
  </ul>
  <i class="bi bi-list mobile-nav-toggle"></i> -->
  <!-- </nav> .navbar -->
  <!-- </div> -->


  <header id="header" class="d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
          <img src="{{asset('assets/img/LogoITHH.svg')}}" style="width: 15rem; object-fit: cover">
          <nav class="navigasi d-flex align-items-center" id="navbar">
              <ul class="d-flex align-items-center nav">
                  @foreach ($navbarmenu->whereIn('format',[0,1])->where('view','1')->sortBy('order') as $loop1)
                  @if ($loop1->format == 1)
                  <li class="submenu">
                      <a class="judul" href="">{{$language == 'id' ? $loop1->indtitle : $loop1->engtitle}}</a>
                      <ul class="menu-container">
                          <p style="font-size: 1rem;" class="menu-desc">
                              {{$loop1->short_desc}}
                          </p>
                          <div class="menu-opt">
                              <ul class="grit">
                                  @foreach ($navbarmenu->where('ops1',$loop1->id)->whereIn('format',[2,3])->where('view','1')->sortBy('order') as $loop2)
                                  @if ($loop2->format == 3)
                                  @else
                                  <li>
                                      <a class="" href="{{ route('showNav', [$loop1->slug, $loop2->slug]) }}">{{$language == 'id' ? $loop2->indtitle : $loop2->engtitle}}</a>
                                  </li>
                                  @endif
                                  @endforeach
                              </ul>
                          </div>
                      </ul>
                  </li>
                  @endif
                  @endforeach
              </ul>
              <i style="color:red;" class="bi bi-list tombol-mobile"></i>
          </nav>
      </div>
  </header>