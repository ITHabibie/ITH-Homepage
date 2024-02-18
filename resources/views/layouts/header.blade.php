  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
          <h1 class="logo">
              <a href="{{route('homepage')}}">
                  <img src="{{ asset('storage')}}/{{$contact->logo }}" style="max-height: 55px">
              </a>
          </h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="{{asset('assets')}}/img/logo.png" alt=""></a>-->
          <nav id="navbar" class="navbar">
              <ul>
                  <!-- <li><a class="nav-link {{ request()->is('/') ? 'active' : '' }}"  href="{{route('homepage')}}">{{$language == 'id' ? 'Beranda':'Home'}}</a></li> -->
                  @foreach ($navbarmenu->whereIn('format',[0,1])->where('view','1')->sortBy('order') as $loop1)
                  @if ($loop1->format == 1)
                  <li class="dropdown">
                      <a href="#" class="{{ request()->is($loop1->slug.'/*') ? 'active' : '' }}"><span>{{$language == 'id' ? $loop1->indtitle : $loop1->engtitle}}</span> <i class="bi bi-chevron-down"></i></a>
                      <ul>
                          <div style="overflow:hidden" class="desc">
                              <p>{{$loop1->short_desc}}</p>
                          </div>
                          <div class="tes">
                              @foreach ($navbarmenu->where('ops1',$loop1->id)->whereIn('format',[2,3])->where('view','1')->sortBy('order') as $loop2)
                              @if ($loop2->format == 3)
                              @else
                              <li >
                                  <a href="{{ route('showNav', [$loop1->slug, $loop2->slug]) }}">{{$language == 'id' ? $loop2->indtitle : $loop2->engtitle}}</a>
                              </li>
                              @endif
                              @endforeach
                          </div>
                      </ul>
                  </li>
                  @endif
                  @endforeach
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
      </div>
  </header><!-- End Header -->

