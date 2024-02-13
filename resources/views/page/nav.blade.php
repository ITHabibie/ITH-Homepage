@extends('layouts.apps')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <h1 style="font-size: 43px">Navigasi Menu</h1>
    </div><!-- /.container-fluid -->
  </div>
<!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Menu</li>
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
                <div>
                    <a class="btn btn-app" data-toggle="modal" data-target="#modal-default" style="height: 30px; padding: 5px 5px">
                        <i class="fas fa-plus"></i>
                    </a>
                    @if (session('trues'))
                        <div class="col-12">
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h6><i class="icon fas fa-check"></i> Alert!  {{ session('trues') }}</h6>
                            </div>
                        </div>
                    @endif
                    @if (session('dataload'))
                        @livewire('page.index', ['idload' => session('dataload'), 'navlink' => session('navlink') ])
                    @else
                        @livewire('page.index', ['idload' => '0', 'navlink' => 0])
                    @endif
                </div>
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
