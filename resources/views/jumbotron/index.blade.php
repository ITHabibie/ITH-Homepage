@extends('layouts.apps')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <h1 style="font-size: 43px">Jumbotron</h1>
    </div><!-- /.container-fluid -->
  </div>
<!-- /.content-header -->
<section class="content">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Jumbotron</li>
    </ol>
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                @if(sizeof($jumbotron))
                    <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#editModal">
                        Edit Jumbotron
                    </button>
                @else
                    <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#addModal">
                        Add Jumbotron
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
                            <th scope="col">Title (Indonesia)</th>
                            <th scope="col">Title (English)</th>
                            <th scope="col">Subtitle (indonesia)</th>
                            <th scope="col">Subtitle (English)</th>
                            <th scope="col">Image</th>
                            <th scope="col">Format</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jumbotron as $key => $item)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $item->indtitle }}</td>
                                <td>{{ $item->engtitle }}</td>
                                <td>{{ $item->indsubtitle }}</td>
                                <td>{{ $item->engsubtitle }}</td>
                                <td>
                                    <img src="{{ asset('storage')}}/{{$item->image }}" class="img-thumbnail" style="max-height: 70px">
                                </td>
                                <td>{{ $item->style }}</td>
                            </tr>
                            <!-- Edit Modal -->
                            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Jumbotron</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('jumbotron.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" name="_method" value="PUT">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="indtitle">Title (Indonesia)</label>
                                                    <input value="{{$item->indtitle}}" type="text" name="indtitle" class="form-control" id="indtitle" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="engtitle">Title (English)</label>
                                                    <input value="{{$item->engtitle}}" type="text" name="engtitle" class="form-control" id="engtitle" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="indsubtitle">Subtitle (Indonesia)</label>
                                                    <input value="{{$item->indsubtitle}}" type="text" name="indsubtitle" class="form-control" id="indsubtitle" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="engsubtitle">Subtitle (English)</label>
                                                    <input value="{{$item->engsubtitle}}" type="text" name="engsubtitle" class="form-control" id="engsubtitle" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="type">Format</label>
                                                    <select name="type" class="form-control" id="type" required>
                                                        <option value="">Pilih</option>
                                                        <option value="1" {{$item->style == 1 ? 'selected':''}} >Format 1</option>
                                                        <option value="2" {{$item->style == 2 ? 'selected':''}} >Format 2</option>
                                                    </select>
                                                </div>
                                                <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                                    <label for="upload">Image</label>
                                                    <input  type="file" name="upload" id="upload"  onchange="readURL(this);" class="form-control border-0">
                                                </div>
                                                <!-- Uploaded image area-->
                                                <div class="image-area">
                                                    <img id="imageResult" src="{{asset('storage')}}/{{$item->image}}" style="max-height: 150px" class="img-fluid rounded shadow-sm mx-auto d-block">
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
                    <h5 class="modal-title" id="exampleModalLabel">Create Jumbotron</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('jumbotron.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="indtitle">Title (Indonesia)</label>
                            <input type="text" name="indtitle" class="form-control" id="indtitle" required>
                        </div>
                        <div class="form-group">
                            <label for="engtitle">Title (English)</label>
                            <input type="text" name="engtitle" class="form-control" id="engtitle" required>
                        </div>
                        <div class="form-group">
                            <label for="indsubtitle">Subtitle (Indonesia)</label>
                            <input type="text" name="indsubtitle" class="form-control" id="indsubtitle" required>
                        </div>
                        <div class="form-group">
                            <label for="engsubtitle">Subtitle (English)</label>
                            <input type="text" name="engsubtitle" class="form-control" id="engsubtitle" required>
                        </div>
                        <div class="form-group">
                            <label for="type">Format</label>
                            <select name="type" class="form-control" id="type" required>
                                <option value="">Pilih</option>
                                <option value="1">Format 1</option>
                                <option value="2">Format 2</option>
                            </select>
                        </div>
                        <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                            <label for="upload">Image</label>
                            <input  type="file" name="upload" id="upload"  onchange="readURL(this);" class="form-control border-0">
                        </div>
                        <!-- Uploaded image area-->
                        <div class="image-area">
                            <img id="imageResult" style="max-height: 150px" class="img-fluid rounded shadow-sm mx-auto d-block">
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
