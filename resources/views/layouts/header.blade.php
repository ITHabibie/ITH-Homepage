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