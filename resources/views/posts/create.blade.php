@extends('layouts.apps')
@push('style')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <h1 style="font-size: 43px">Page</h1>
    </div><!-- /.container-fluid -->
  </div>
<!-- /.content-header -->
<section class="content">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Create New Post</li>
    </ol>
    <div class="container">
        
    <div class="row">
        <div class="col-12">
            @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show my-1" role="alert">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-4 mx-auto">
                    <!-- Upload image input-->
                    <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                        <input  type="file" name="cover" id="cover" value="{{old('cover')}}" onchange="readURL(this);" class="form-control border-0" required>
                    </div>
                    <!-- Uploaded image area-->
                    <div class="image-area"><img id="imageResult" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                    @error('cover')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                    <div class="form-group">
                        <label for="title">Title (Bahasa Indonesia)</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" required>
                        @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="engtitle">Title (Bahasa Inggris)</label>
                        <input type="text" name="engtitle" class="form-control @error('engtitle') is-invalid @enderror" value="{{old('engtitle')}}" >
                        @error('engtitle')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12 col-md-4">
                            <label for="category">Category</label>
                            <select name="category" id="category" class="form-control @error('category') is-invalid @enderror" required>
                                <option value="" disabled selected>Choose one</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12 col-md-4">
                            <label for="keywords">Keywords</label>
                            <input type="text" name="keywords" class="form-control @error('keywords') is-invalid @enderror" value="{{old('keywords')}}" required>
                            @error('keywords')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12 col-md-4">
                            <label>Date:</label>
                              <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                  <input type="text" name="tanggal" class="form-control datetimepicker-input" data-target="#reservationdate">
                                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                  </div>
                              </div>
                          </div>
                    </div>
                    <div class="form-group">
                        <label for="tag">Tags</label>
                        <select name="tags[]" id="tag" class="form-control select2 @error('tags') is-invalid @enderror" required multiple>
                            @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                        @error('tags')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                <div class="form-group">
                    <label for="desc">Description (Bahasa Indonesia)</label>
                    <textarea name="desc" id="desc" cols="30" rows="30" class="my-editor form-control @error('desc') is-invalid @enderror">{{old('desc')}}</textarea>
                    @error('desc')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="eng">Description (Bahasa Inggris)</label>
                    <textarea name="eng" id="eng" cols="30" rows="30" class="my-editor form-control @error('eng') is-invalid @enderror">{{old('eng')}}</textarea>
                    @error('eng')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
               {{-- {{ collect(\Str::of('11-12-2021')->explode('-'))->reverse()->implode('-') }} --}}
                
                <button type="submit" class="btn btn-primary form-control">Submit</button>
            </form>
        </div>
    </div>
</div>
</section>
@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: "Choose Some Tags"
        });
    });
</script>
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

    //Date picker
    $('#reservationdate').datetimepicker({
        format : "DD-MM-YYYY"
    });


</script>

@endpush

