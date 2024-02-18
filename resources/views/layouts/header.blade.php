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
                  <li class="dropdown">
                      <a href="">halo<i class="bi bi-chevron-down"></i></a>
                      <ul class="container">
                        <div class="desc">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quod rem voluptates totam? Laboriosam ducimus soluta corrupti fugiat, praesentium magni quae voluptates. Ipsam earum nihil ut, vero tempora magnam repellat!
                                Aperiam voluptates qui doloribus? Quidem harum, voluptatibus odio error expedita voluptate consequuntur maiores inventore dolorum reprehenderit suscipit minima illum molestiae repudiandae illo vitae temporibus animi molestias qui, similique facilis iste.
                            </p>
                        </div>
                        <div class="grit">
                            <li>aa</li>
                            <li>aa</li>
                            <li>aa</li>
                        </div>
                      </ul>
                  </li>
                  <li class="dropdown">
                      <a href="">halo<i class="bi bi-chevron-down"></i></a>
                      <ul class="container">
                          <li>aa</li>
                          <li>aa</li>
                          <li>aa</li>
                      </ul>
                  </li>
                  <li class="dropdown">
                      <a href="">halo<i class="bi bi-chevron-down"></i></a>
                      <ul class="container">
                          <li>aa</li>
                          <li>aa</li>
                          <li>aa</li>
                      </ul>
                  </li>
              </ul>
              <!-- <ul> -->
              <!-- <li><a class="nav-link {{ request()->is('/') ? 'active' : '' }}"  href="{{route('homepage')}}">{{$language == 'id' ? 'Beranda':'Home'}}</a></li> -->
              <!-- @foreach ($navbarmenu->whereIn('format',[0,1])->where('view','1')->sortBy('order') as $loop1)
                  @if ($loop1->format == 1)
                  <li class="dropdown">
                      <a href="#" class="{{ request()->is($loop1->slug.'/*') ? 'active' : '' }}"><span>{{$language == 'id' ? $loop1->indtitle : $loop1->engtitle}}</span> <i class="bi bi-chevron-down"></i></a>
                      <ul class="container">
                          <div class="pls">
                            <p>😭😭😭😭😭</p>
                          </div>
                          <div class="tes">
                              @foreach ($navbarmenu->where('ops1',$loop1->id)->whereIn('format',[2,3])->where('view','1')->sortBy('order') as $loop2)
                              @if ($loop2->format == 3)
                              @else
                              <li>
                                  <a href="{{ route('showNav', [$loop1->slug, $loop2->slug]) }}">{{$language == 'id' ? $loop2->indtitle : $loop2->engtitle}}</a>
                              </li>
                              @endif
                              @endforeach
                          </div>
                      </ul>
                  </li>
                  @endif
                  @endforeach
              </ul>-->
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
      </div>
  </header><!-- End Header -->

  <!-- <div class="navigasi">
    <ul>
        <li class="dropdown">
            <a href="">hover aku kakak</a>
            <div class="container">
                <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quos, voluptates facere pariatur reprehenderit ea laudantium, nisi eum ut eligendi dicta illum eos, error culpa numquam mollitia magni deserunt iusto.
                Voluptas totam quos officia culpa alias inventore adipisci ipsa eligendi, perspiciatis et veniam reiciendis odit non, eum commodi ut ullam magni vitae. Modi quidem tempora cum magni nulla ut veniam.</div>
                <ul>
                    <li>halo</li>
                    <li>halo</li>
                    <li>halo</li>
                </ul>
            </div>
        </li>
    </ul>
</div> -->