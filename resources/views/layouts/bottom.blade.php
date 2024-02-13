@if ($page->bottom == 1)
    @if ($flatBOTbanner == 3)
        <section id="details" class="details" style="background: {{$page->alt1}}; padding: 30px 0">
            <div class="container">
            <div class="row content">
                <div class="col-md-5 order-1 order-md-2 text-center">
                    <img src="{{asset('storage')}}/images/banner/{{$bottom->image}}" style="height: 450px; margin-bottom: -50px" class="img-fluid">
                </div>
                <div class="col-md-7 pt-3 order-2 order-md-1" style="color: white">
                    <div class="section-title">
                        <h3>{{$language == 'id' ? $bottom->menu:$bottom->engmenu }}</h3>
                        <h3><span style="color: rgb(255, 255, 255)">{{$language == 'id' ? $bottom->submenu:$bottom->engsubmenu}}</span></h3>
                    </div>
                    <center> {!!$language == 'id' ? \Str::words($bottom->desc,99):\Str::words($bottom->engdesc,99)!!} </center>
                </div>
            </div>
            </div>
        </section>
    @endif
@endif
