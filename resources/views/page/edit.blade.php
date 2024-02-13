@extends('layouts.apps')

@section('content')
<style>
    /*
    *
    * ==========================================
    * CUSTOM UTIL CLASSES
    * ==========================================
    *
    */
    #upload {
        opacity: 0;
    }

    #upload-label {
        position: absolute;
        top: 50%;
        left: 1rem;
        transform: translateY(-50%);
    }

    .image-area {
        border: 2px dashed rgba(255, 255, 255, 0.7);
        padding: 1rem;
        position: relative;
    }

    .image-area::before {
        content: 'Uploaded image result';
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 0.8rem;
        z-index: 1;
    }

    .image-area img {
        z-index: 2;
        position: relative;
    }
</style>
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
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
                <div class="col-6 row">
                    <div>
                        <a href="{{route('back', $dataEdit->id)}}" class="btn btn-app" style="height: 40px; padding: 10px 5px; margin: 0 0 11px 0" >
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                <div>
        <form action="{{route('pageUpdata')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <button type="submit" class="btn btn-app" style="height: 40px; padding: 7px 5px; margin: 0 0 11px -7px" >
                            <i class="fas fa-save"></i>
                        </button>
                </div>
                </div>
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

            <div class="col-12">
                <div class="card card-primary card-tabs">
                  <div class="card-header p-0 pt-1">
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                        href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                        aria-selected="true">{{$dataEdit->indtitle}}</a>
                      </li>
                    </ul>
                  </div>
                    <div class="modal-body">

                    <input type="hidden" name="id" value="{{$dataEdit->id}}">
                    <div class="row">
                        @if ($dataEdit->format == 0 or $dataEdit->format == 2 or $dataEdit->format == 4)
                        <div class="col-lg-4 mx-auto">
                            <!-- Upload image input-->
                            <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                <input  type="file" name="upload" id="upload"  onchange="readURL(this);" class="form-control border-0">
                                <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose Cover</label>
                                <div class="input-group-append">
                                    <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose Cover</small></label>
                                </div>
                            </div>
                            <!-- Uploaded image area-->
                            <div class="image-area"><img id="imageResult" src="{{asset('storage')}}/{{$dataEdit->img}}" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                            
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="hapusgambar" name="hapusgambar">
                                <label for="hapusgambar" class="custom-control-label">Hapus Gambar</label>
                              </div>
                        </div>
                        
                        @endif
                        <div class="col-8 row">
                            <div class="form-group col-6">
                                <label for="ind">Title (Indonesia)</label>
                                <input type="text" name="indtitle" class="form-control" id="indtitle" value="{{$dataEdit->indtitle}}" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="en">Title (English)</label>
                                <input type="text" name="engtitle" class="form-control" id="entitle" value="{{$dataEdit->engtitle}}" required>
                            </div>
                                @php
                                    $range = 2;
                                @endphp
                                <div class="form-group col-6">
                                    <label for="slug">Slug</label>
                                    <input type="text" name="slug" class="form-control" id="slug" value="{{$dataEdit->slug}}" required>
                                </div>
                                <div class="form-group col-6">
                                    <label for="order">Order</label>
                                    <select name="order" id="order" class="form-control">
                                        <option >1 - Home Page</option>
                                        @foreach ($option as $item)
                                        <option value="{{$item->order}}" {{$dataEdit->order == $item->order ? 'selected':''}}>{{$range++}}</option>
                                        @endforeach
                                        <option >End - Kontak</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label for="view">Status</label>
                                    <select name="view" id="view" class="form-control">
                                        <option value="0" {{$dataEdit->view == 0 ? 'selected':''}} >Tidak Aktif</option>
                                        <option value="1" {{$dataEdit->view == 1 ? 'selected':''}} >Aktif</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label for="format">Mode</label>
                                    <select name="format" id="format" class="form-control">
                                        @if ($dataEdit->format == 0 or $dataEdit->format == 1)
                                            <option value="0" {{$dataEdit->format == 0 ? 'selected':''}}>Menu</option>
                                            <option value="1" {{$dataEdit->format == 1 ? 'selected':''}}>Primary Menu</option>
                                        @elseif ($dataEdit->format == 2 or $dataEdit->format == 3)
                                            <option value="2" {{$dataEdit->format == 2 ? 'selected':''}}>Submenu</option>
                                            <option value="3" {{$dataEdit->format == 3 ? 'selected':''}}>Primary Submenu</option>
                                        @elseif ($dataEdit->format == 4)
                                            <option value="4" {{$dataEdit->format == 2 ? 'selected':''}}>Sub submenu</option>
                                        @endif

                                    </select>
                                </div>
                        </div>
                    </div>
                    @if ($dataEdit->format == 0 or $dataEdit->format == 2 or $dataEdit->format == 4)
                        <div class="mb-3 col-12">
                            <label for="desc" class="form-label">Conten Indonesia</label>
                            <textarea name="desc" class="my-editor form-control" id="desc" cols="30" rows="30">{{$dataEdit->content}}</textarea>
                        </div>
                        <div class="mb-3 col-12">
                            <label for="inggris" class="form-label">Conten English</label>
                            <textarea name="inggris" class="my-editor form-control" id="inggris" cols="30" rows="30">{{$dataEdit->inggris}}</textarea>
                        </div>
                    @endif


                    </div>
                  <!-- /.card -->
                </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
<script>
    var editor_config = {
    path_absolute : "/",
    selector: 'textarea.my-editor',
    relative_urls: false,
    plugins: [
        "codesample advlist autolink autosave lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table directionality",
        "emoticons template paste textpattern"
    ],
    toolbar: "codesample restoredraft insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    file_picker_callback : function(callback, value, meta) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
        if (meta.filetype == 'image') {
        cmsURL = cmsURL + "&type=Images";
        } else {
        cmsURL = cmsURL + "&type=Files";
        }

        tinyMCE.activeEditor.windowManager.openUrl({
        url : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no",
        onMessage: (api, message) => {
            callback(message.content);
        }
        });
    }
    };

    tinymce.init(editor_config);
</script>
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
