@if ($page->mid == 1)
    @if ($flatMIDbanner == 2)
        <section id="details" class="details" style="background: {{$page->alt1}};">
            <div class="container">
            <div class="row content">
                <div class="col-md-4 order-1 order-md-2 text-center">
                    <img src="{{asset('storage')}}/images/banner/{{$mid->image}}" style="max-height: 370px">
                </div>
                <div class="col-md-8 pt-3 order-2 order-md-1" style="color: white">
                    <div class="section-title">
                        <h3>{{$language == 'id' ? $mid->menu:$mid->engmenu }}</h3>
                        <h3><span style="color: rgb(61, 59, 59)">{{$language == 'id' ? $mid->submenu:$mid->engsubmenu}}</span></h3>
                    </div>
                    <center> {!!$language == 'id' ? \Str::words($mid->desc,99):\Str::words($mid->engdesc,99)!!} </center>
                </div>
            </div>
            </div>
        </section>
    @endif
    {{-- <div class="container-fluid" style="background: {{$page->alt1}}; color: white">
        <div class="row" style="padding: 3rem">
            <h1 class="text-center">Time Line</h1>

            <div class="col-md-12 p-5">
                <div class="main-timeline">
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-year">2021</div>
                            <h3 class="title">Web Designing</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus lorem, et condimentum neque commodo Integer males uada tellus lorem, et condimentum neque commodo
                            </p>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-year">2021</div>
                            <h3 class="title">Web Designing</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus lorem, et condimentum neque commodo Integer males uada tellus lorem, et condimentum neque commodo
                            </p>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-year">2021</div>
                            <h3 class="title">Web Designing</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus lorem, et condimentum neque commodo Integer males uada tellus lorem, et condimentum neque commodo
                            </p>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-year">2021</div>
                            <h3 class="title">Web Designing</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus lorem, et condimentum neque commodo Integer males uada tellus lorem, et condimentum neque commodo
                            </p>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-year">2020</div>
                            <h3 class="title">Web Development</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus lorem, et condimentum neque commodo Integer males uada tellus lorem, et condimentum neque commodo
                            </p>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-year">2020</div>
                            <h3 class="title">Web Development</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus lorem, et condimentum neque commodo Integer males uada tellus lorem, et condimentum neque commodo
                            </p>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-year">2020</div>
                            <h3 class="title">Web Development</h3>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus lorem, et condimentum neque commodo Integer males uada tellus lorem, et condimentum neque commodo
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endif
