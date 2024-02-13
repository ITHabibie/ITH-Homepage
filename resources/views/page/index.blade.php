@extends('layouts.apps')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <h1 style="font-size: 43px">Page</h1>
    </div><!-- /.container-fluid -->
  </div>
<!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Page</li>
        </ol>
        <div class="row">

            @if (session('true'))
                <div class="col-12">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h6><i class="icon fas fa-check"></i> Alert!  {{ session('true') }}</h6>
                    </div>
                </div>
            @endif
            @if (session('false'))
                <div class="col-sm-12">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h6><i class="icon fas fa-ban"></i> Alert! &ensp; {{ session('false') }}</h6>
                    </div>
                </div>
            @endif
            <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form action="{{ route('page.store') }}" method="POST">
                    <div class="modal-header">
                      <h4 class="modal-title">Default Modal</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <input type="hidden" name="format" value="0">
                    <input type="hidden" name="ops1" value="0">
                    <input type="hidden" name="_method" value="POST">
                            @csrf
                            <div class="form-group">
                                <label for="indtitle">Title Page / Menu (Indonesia)</label>
                                <input type="text" name="indtitle" class="form-control" id="indtitle"  required>
                            </div>
                            <div class="form-group">
                                <label for="engtitle">Title Page / Menu (English)</label>
                                <input type="text" name="engtitle" class="form-control" id="engtitle" required>
                            </div>

                    </div>
                    <div class="modal-footer justify-content-end">
                      {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> --}}
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <div class="col-12">
                <div class="card card-primary card-tabs">
                  <div class="card-header p-0 pt-1">
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab"
                        aria-controls="custom-tabs-one-home" aria-selected="true">Home Page</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                      <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                        <div class="table-responsive">

                            @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show my-1" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Title (Indonesia)</th>
                                        <th scope="col">Title (English)</th>
                                        <th scope="col">Top Bar</th>
                                        {{-- <th scope="col">Side Bar</th> --}}
                                        <th scope="col">Top Banner</th>
                                        <th scope="col">Mid Banner</th>
                                        <th scope="col">Bottom Banner</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $item)
                                        <tr>
                                            <td>{{ $item->ind }}</td>
                                            <td>{{ $item->en }}</td>
                                            <td>{{ $item->top_bar == 0 ? 'No':'Yes' }}</td>
                                            {{-- <td>{{ $item->side_bar == 0 ? 'No':'Yes' }}</td> --}}
                                            <td>{{ $item->top == 0 ? 'No':'Yes' }}</td>
                                            <td>{{ $item->mid == 0 ? 'No':'Yes' }}</td>
                                            <td>{{ $item->bottom == 0 ? 'No':'Yes' }}</td>
                                            <td>
                                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal-{{ $item->id }}">
                                                    <i class="fa fa-pen"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- Edit Modal -->
                                        <div class="modal fade" id="editModal-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Tag</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('page.update', $item->id) }}" method="POST">
                                                            <input type="hidden" name="_method" value="PUT">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="ind">Title (Indonesia)</label>
                                                                <input type="text" name="ind" class="form-control" id="ind" value="{{ $item->ind }}" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="en">Title (English)</label>
                                                                <input type="text" name="en" class="form-control" id="en" value="{{ $item->en }}" required>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-6">
                                                                    <label for="top_bar">Top Bar</label>
                                                                    <select name="top_bar" id="top_bar" class="form-control">
                                                                        <option value="0" {{$item->top_bar == 0 ? 'selected':''}} >No</option>
                                                                        <option value="1" {{$item->top_bar == 1 ? 'selected':''}} >Yes</option>
                                                                    </select>
                                                                </div>
                                                                {{-- <div class="form-group col-6">
                                                                    <label for="side_bar">Side Bar</label>
                                                                    <select name="side_bar" id="side_bar" class="form-control">
                                                                        <option value="0" {{$item->side_bar == 0 ? 'selected':''}} >No</option>
                                                                        <option value="1" {{$item->side_bar == 1 ? 'selected':''}} >Yes</option>
                                                                    </select>
                                                                </div> --}}
                                                                <div class="form-group col-6">
                                                                    <label for="top">Top Banner</label>
                                                                    <select name="top" id="top" class="form-control">
                                                                        <option value="0" {{$item->top == 0 ? 'selected':''}} >No</option>
                                                                        <option value="1" {{$item->top == 1 ? 'selected':''}} >Yes</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-6">
                                                                    <label for="mid">Mid Banner</label>
                                                                    <select name="mid" id="mid" class="form-control">
                                                                        <option value="0" {{$item->mid == 0 ? 'selected':''}} >No</option>
                                                                        <option value="1" {{$item->mid == 1 ? 'selected':''}} >Yes</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-6">
                                                                    <label for="bottom">Bottom</label>
                                                                    <select name="bottom" id="bottom" class="form-control">
                                                                        <option value="0" {{$item->bottom == 0 ? 'selected':''}} >No</option>
                                                                        <option value="1" {{$item->bottom == 1 ? 'selected':''}} >Yes</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-6">
                                                                    <label for="alt1">Warna</label>
                                                                    <select name="alt1" id="alt1" class="form-control">
                                                                        <option style="background: #244064; color:ghostwhite" value="#244064" {{$item->alt1 == '#244064' ? 'selected':''}}>Biru</option>
                                                                        {{-- <option style="background: #1e81b0;" value="#1e81b0" {{$item->alt1 == '#1e81b0' ? 'selected':''}}>Biru</option> --}}
                                                                        <option style="background: #96281b; color:ghostwhite" value="#96281b" {{$item->alt1 == '#96281b' ? 'selected':''}}>Merah</option>
                                                                        <option style="background: #1e824c; color:ghostwhite" value="#1e824c" {{$item->alt1 == '#1e824c' ? 'selected':''}}>Hijau</option>
                                                                        <option style="background: #57616b; color:ghostwhite" value="#57616b" {{$item->alt1 == '#57616b' ? 'selected':''}}>Abu-Abu</option>
                                                                    </select>
                                                                </div>
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

                  </div>
                  <!-- /.card -->
                </div>
            </div>
            <div class="col-12">
                @livewire('page.topbanner')
            </div>

        </div>
    </div>
    <div style="height: 330px"></div>

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
