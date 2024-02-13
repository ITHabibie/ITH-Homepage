<section id="topbar" class="d-flex align-items-center" style="background: {{$page->alt1}}">
    <div class="container d-flex justify-content-center justify-content-md-between">
        @isset($contact)
        <div class="contact-info d-flex align-items-center">
            <!-- <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">{{$contact->email}}</a></i> -->
            <!-- <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{$contact->telepon}}</span></i> -->
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="{{$contact->twitter}}" class="twitter"><i class="bi bi-twitter"></i></a>
            <!-- <a href="{{$contact->facebook}}" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="{{$contact->instagram}}" class="instagram"><i class="bi bi-instagram"></i></a> -->
            <!-- <a href="{{$contact->linkedin}}" class="linkedin"><i class="bi bi-linkedin"></i></a> -->
        </div>
        @endisset
    </div>
</section>