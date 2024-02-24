 <!-- ======= Footer ======= -->
 <footer id="footer" style="background: {{$page->alt1}};">
    {{-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6" style="color: black">
            <h4>{{__('cek.join')}}</h4>
            <a href="{{ $pmb->url }}" target="blank" class="btn btn-primary px-5">
              P M B
            </a>
          </div>
        </div>
      </div>
    </div> --}}
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-contact">
            {{-- <h3>
                <a href="{{route('homepage')}}">
                    <img src="{{ asset('storage')}}/{{$contact->logo }}" style="max-height: 55px">
                </a>
            </h3> --}}
            {{-- <p>
                <strong>{{__('cek.telepon')}}:</strong>&ensp; {{$contact->telepon}}<br>
                <strong>{{__('cek.email')}}:</strong>&ensp; {{$contact->email}}<br><br>
                {{$contact->alamat}}              
            </p> --}}
          </div>
          @if ($link->count('id') > 4)
              @foreach ($link->chunk(5) as $item)
              <div class="col-lg-3 col-md-6 footer-links">
                  <h4>Useful Links</h4>
                  <ul>
                    @foreach ($item as $items)
                        <li>
                          <i class="bx bx-chevron-right"></i>
                          <a href="{{$items->link}}" target="_blank">{{$items->indtitle}}</a>
                        </li>
                    @endforeach
                  </ul>
              </div>
              @endforeach
          @else
            {{-- <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                @foreach ($link as $items)
                    <li>
                      <i class="bx bx-chevron-right"></i>
                      <a href="{{$items->link}}" target="_blank">{{$items->indtitle}}</a>
                    </li>
                @endforeach
                </ul>
            </div> --}}
            <div class="col-lg-3 col-md-6 footer-links"></div>
          @endif
          {{-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>{{__('cek.sosial-1')}}</h4>
            <p style="color: black">{{__('cek.sosial-2')}}</p>
            <div class="social-links mt-3">
                <a href="{{$contact->twitter}}" style="background: {{$page->alt1}}" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="{{$contact->facebook}}" style="background: {{$page->alt1}}" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="{{$contact->instagram}}" style="background: {{$page->alt1}}" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="{{$contact->linkedin}}" style="background: {{$page->alt1}}" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
    <div class="container py-4" style=" color: white;">
      <div class="copyright" style="padding-right: 3rem">
        Powered By <strong><span>ith.ac.id</span></strong>. All Rights Reserved
      </div>
      <hr>
      <div class="copyright" style=" color: rgb(255, 255, 255); font-size: 6px">
        &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved
      </div>
      <div class="credits" style=" color: white; font-size: 6px">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>
<!-- End Footer -->

