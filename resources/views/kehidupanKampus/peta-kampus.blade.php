@extends('layouts.pages')

@section('content')
 <section class="breadcrumbs">
      <div class="container" style="margin-top: 11.2rem">
        
        <div class="row justify-content-center">
          <div class="row col-lg-6">
              <div class="col-md-6">
                  <div class="info-box mb-4">
                      <i class="bx bx-envelope"></i>
                      <h3>{{__('cek.email')}}</h3>
                      <p>{{$contact->email}}</p>
                  </div>
                  </div>

                  <div class="col-md-6 mb-4">
                  <div class="info-box ">
                      <i class="bx bx-phone-call"></i>
                      <h3>{{__('cek.telepon')}}</h3>
                      <p>{{$contact->telepon}}</p>
                  </div>
                  </div>

              <div class="col-lg-12 mb-4">
                  <div class="info-box">
                      <i class="bx bx-map"></i>
                      <h3>{{__('cek.alamat')}}</h3>
                      <p>{{$contact->alamat}}</p>
                  </div>
                  </div>
          </div>
          <div class="col-lg-6">
              {!!$contact->maps!!}
          </div>     
        </div>  
      </div>
    </section>
@endsection