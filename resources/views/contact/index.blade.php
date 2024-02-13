@extends('layouts.apps')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <h1 style="font-size: 43px">Contact</h1>
    </div><!-- /.container-fluid -->
  </div>
<!-- /.content-header -->
<section class="content">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Contact</li>
    </ol>
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                @if(sizeof($contact))
                    <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#editModal">
                        Edit Contact
                    </button>
                @else
                    <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#addModal">
                        Add Contact
                    </button>
                @endif
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show my-1" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                @if (session('warning'))
                <div class="alert alert-warning alert-dismissible fade show my-1" role="alert">
                    {{ session('warning') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Maps</th>
                            <th scope="col">Facebook</th>
                            <th scope="col">Twitter</th>
                            <th scope="col">Instagram</th>
                            <th scope="col">Linkedin</th>
                            <th scope="col">logo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contact as $key => $item)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->telepon }}</td>
                                <td>{{ \Str::limit($item->maps, 30, '...')}}</td>
                                <td>{{ $item->facebook }}</td>
                                <td>{{ $item->twitter }}</td>
                                <td>{{ $item->instagram }}</td>
                                <td>{{ $item->linkedin }}</td>
                                <td>
                                    <img src="{{ asset('storage')}}/{{$item->logo }}" class="img-thumbnail" style="max-height: 70px">
                                </td>
                            </tr>
                            <!-- Edit Modal -->
                            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('contact.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" name="_method" value="PUT">
                                                @csrf
                                                <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                                    <label for="upload">Image</label>
                                                    <input  type="file" name="upload" id="upload"  onchange="readURL(this);" class="form-control border-0">
                                                </div>
                                                <!-- Uploaded image area-->
                                                <div class="image-area">
                                                    <img id="imageResult" src="{{asset('storage')}}/{{$item->logo}}" style="max-height: 150px" class="img-fluid rounded shadow-sm mx-auto d-block">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fas fa-compass"></i></span>
                                                    </div>
                                                    <input value="{{ $item->alamat }}" type="text" class="form-control" name="alamat" placeholder="Alamat">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                    </div>
                                                    <input value="{{ $item->email }}" type="email" class="form-control" name="email" placeholder="Email">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                    </div>
                                                    <input value="{{ $item->telepon }}" type="text" class="form-control" name="phone" placeholder="Phone">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fas fa-map"></i></span>
                                                    </div>
                                                    <textarea type="text" class="form-control" name="map" placeholder="Maps">{{ $item->maps }}</textarea>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
                                                    </div>
                                                    <input value="{{$item->facebook}}" type="text" class="form-control" name="fb" placeholder="Facebook">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fab fa-twitter-square"></i></span>
                                                    </div>
                                                    <input value="{{$item->twitter}}" type="text" class="form-control" name="twitter" placeholder="Twitter">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fab fa-instagram-square"></i></span>
                                                    </div>
                                                    <input value="{{$item->instagram}}" type="text" class="form-control" name="insta" placeholder="Instagram">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><strong>in</strong></span>
                                                    </div>
                                                    <input value="{{$item->linkedin}}" type="text" class="form-control" name="link" placeholder="Linkedin">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Contact</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                            <label for="upload">Image</label>
                            <input  type="file" name="upload" id="upload"  onchange="readURL(this);" class="form-control border-0">
                        </div>
                        <!-- Uploaded image area-->
                        <div class="image-area">
                            <img id="imageResult" style="max-height: 150px" class="img-fluid rounded shadow-sm mx-auto d-block">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-compass"></i></span>
                            </div>
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="text" class="form-control" name="phone" placeholder="Phone">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-map"></i></span>
                            </div>
                            <textarea type="text" class="form-control" name="map" placeholder="Maps"></textarea>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
                            </div>
                            <input type="text" class="form-control" name="fb" placeholder="Facebook">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fab fa-twitter-square"></i></span>
                            </div>
                            <input type="text" class="form-control" name="twitter" placeholder="Twitter">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fab fa-instagram-square"></i></span>
                            </div>
                            <input type="text" class="form-control" name="insta" placeholder="Instagram">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><strong>in</strong></span>
                            </div>
                            <input type="text" class="form-control" name="link" placeholder="Linkedin">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
<script>
    /*  ==========================================
        SHOW UPLOADED IMAGE
    * ========================================== */
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imageResult')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(function () {
        $('#upload').on('change', function () {
            readURL(input);
        });
    });

    /*  ==========================================
        SHOW UPLOADED IMAGE NAME
    * ========================================== */
    var input = document.getElementById( 'upload' );
    var infoArea = document.getElementById( 'upload-label' );

</script>
@endpush

