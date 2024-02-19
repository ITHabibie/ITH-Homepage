<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <img src="{{asset('assets/img/LogoITHH.svg')}}" style="width: 15rem; object-fit: cover">
        <nav id="navbar" class="navbar">
            <ul>
                @foreach ($navbarmenu->whereIn('format',[0,1])->where('view','1')->sortBy('order') as $loop1)
                @if ($loop1->format == 1)
                <li class="dropdown"><a href="#" style="color:white;" class="{{ request()->is($loop1->slug.'/*') ? 'active' : '' }}"><span>{{$language == 'id' ? $loop1->indtitle : $loop1->engtitle}}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        @foreach ($navbarmenu->where('ops1',$loop1->id)->whereIn('format',[2,3])->where('view','1')->sortBy('order') as $loop2)
                        @if ($loop2->format == 3)
                        <li class="dropdown"><a href="#"><span>{{$language == 'id' ? $loop2->indtitle : $loop2->engtitle}}</span> <i class="bi bi-chevron-down"></i></a>
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
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header>