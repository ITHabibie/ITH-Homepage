@if ($page->top == 1)
    @if ($flatTOPbanner == 1)
    <section id="details" class="details" style="background: {{$page->alt1}}; padding: 30px 0">
        <div class="container">
        <div class="row content">
            <div class="col-md-5 order-1 order-md-2 text-center">
                <img src="{{asset('storage')}}/images/banner/{{$top->image}}" style="margin-bottom: -30px; margin-top: -50px" class="img-fluid">
            </div>
            <div class="col-md-7 pt-3 order-2 order-md-1" style="color: white">
                <div class="section-title">
                    <h3>{{$language == 'id' ? $top->menu:$top->engmenu }}</h3>
                    <h3><span style="color: rgb(255, 255, 255)">{{$language == 'id' ? $top->submenu:$top->engsubmenu}}</span></h3>
                </div>
                <center> {!!$language == 'id' ? \Str::words($top->desc,99):\Str::words($top->engdesc,99)!!} </center>
            </div>
        </div>
        </div>
    </section>
    @else
    @endif
@endif
