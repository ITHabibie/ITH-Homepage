<div class="col-12">
    
@if (session()->has('message'))
<div class="col-12">
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h6><i class="icon fas fa-check"></i> Alert!  {{ session('message') }}</h6>
    </div>
</div>
@endif
    <div class="card card-primary card-tabs">
      <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
            <li class="nav-item">
                <a type="button" class="nav-link">
                    Home Page
                </a>
            </li>
          @foreach ($nav->whereIn('format',[0,1]) as $item)
          <li class="nav-item">
            <a type="button" class="nav-link" style ="background: {{$item->id == $menu? 'white':''}}; color: {{$item->id == $menu? '#007bff':''}}" wire:click="tabs({{$item->id}},{{$item->order}})">
                {{$item->indtitle}} &ensp;
                @if ($item->view == 0)
                    <i class="fa fa-eye-slash"></i>
                @endif
            </a>
          </li>
          @endforeach
            <li class="nav-item">
                <a type="button" class="nav-link">
                    Kontak
                </a>
            </li>
        </ul>
      </div>
      <div class="card-body">
        <div>
            @if ($menu)
           
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Title (Indonesia)</th>
                            <th scope="col">Title (English)</th>
                            <th scope="col">Slug {{$navhead->format}} </th>
                            @if ($navhead->format == 0)
                            <th scope="col">Cover</th>
                            <th scope="col">Content</th>
                            @endif
                            {{-- <th scope="col">Order</th> --}}
                            <th scope="col">Status</th>
                            <th scope="col">Mode</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    @foreach ($nav->where('id',$menu) as $item)
                        <tr>
                            <td>{{ $item->indtitle }}</td>
                            <td>{{ $item->engtitle }}</td>
                            <td>{{ $item->slug }}</td>
                            @if ($item->format == 0)
                                @if ($item->img)
                                <td><img src="{{asset('storage/')}}/{{$item->img}}" style="max-height: 70px"></td>
                                @else
                                <td><img src="{{asset('storage/images/page/default.jpg')}}" style="max-height: 70px"></td>
                                @endif
                                <td>{!! $item->content !!}</td>
                            @endif
                            {{-- <td>{{ $item->order }}</td> --}}
                            <td>
                                <i class="fa fa-{{$item->view == 0? 'eye-slash':'eye'}}"></i>
                            </td>
                            <td>{{ $item->format == 0 ? 'Menu' : 'Primary Menu' }}</td>
                            <td>
                                <a href="{{route('menuEdit', $item->id)}}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pen"></i>
                                </a>
                                <form method="POST" action="{{route('page.destroy', [$item->id])}}" class="d-inline" onsubmit="return confirm('Delete this data permanently?')">
                                    @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                    </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <i>Pilih Menu</i>
            @endif
        </div>

        @if ($navhead->format ?? '0' == 1)
            <hr>
                <a class="btn btn-app" data-toggle="modal" data-target="#modal-default2" style="height: 30px; padding: 5px 5px; margin:0 0 10px 0">
                    <i class="fas fa-plus"></i>
                </a>
            <div class="row">
                <div class="col-2">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                    @foreach ($nav->where('ops1', $navhead->id)->sortBy('order') as $item)
                    <li class="nav-item">
                        <a class="nav-link {{$item->id == $navlink ? 'active':''}}" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" wire:click="navlink({{$item->id}})" role="tab" aria-controls="vert-tabs-home" aria-selected="true">
                            {{$item->indtitle}} &ensp;
                            @if ($item->view == 0)
                                <i class="fa fa-eye-slash"></i>
                            @endif
                        </a>

                    </li>
                    @endforeach
                </div>
                </div>
                <div class="col-10">
                <div class="tab-content" id="vert-tabs-tabContent">
                    @if ($navlink)
                    <div class="tab-pane text-left fade active show" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                        <style>
                            .table img {
                                width: 40%;
                                height: 40%;
                            }
                        </style>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Title (Indonesia)</th>
                                    <th scope="col">Title (English)</th>
                                    <th scope="col">Slug </th>
                                    @if ($navside->format == 2)
                                    <th scope="col">Cover</th>
                                    <th scope="col">Content</th>
                                    @endif
                                    {{-- <th scope="col">Order</th> --}}
                                    <th scope="col">Status</th>
                                    <th scope="col">Mode</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            @foreach ($nav->where('id', $navlink)->where('ops1', $navhead->id) as $item)
                                <tr>
                                    <td>{{ $item->indtitle }}</td>
                                    <td>{{ $item->engtitle }}</td>
                                    <td>{{ $item->slug }}</td>
                                    @if ($navside->format == 2)
                                        @if ($item->img)
                                        <td><img src="{{asset('storage/')}}/{{$item->img}}" style="max-height: 70px"></td>
                                        @else
                                        <td><img src="{{asset('storage/images/page/default.jpg')}}" style="max-height: 70px"></td>
                                        @endif
                                        <td>
                                            {!! \Str::words($item->content, 30) !!}
                                        </td>
                                    @endif
                                    {{-- <td>{{ $item->order }}</td> --}}
                                    <td>
                                        <i class="fa fa-{{$item->view == 0? 'eye-slash':'eye'}}"></i>
                                    </td>
                                    <td>{{ $item->format == 2 ? 'Submenu' : 'Primary Submenu' }}</td>
                                    <td>
                                        <a href="{{route('menuEdit', $item->id)}}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pen"></i>
                                        </a>
                                        <form method="POST" action="{{route('page.destroy', [$item->id])}}" class="d-inline" onsubmit="return confirm('Delete this data permanently?')">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{-- <input type="submit" value="Delete" class="btn btn-danger btn-sm"> --}}
                                            <button class="btn btn-danger btn-sm" type="submit">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                        @if ($navside->format == 3)
                            <hr>
                            <a class="btn btn-app" data-toggle="modal" data-target="#modal-default3" style="height: 30px; padding: 5px 5px; margin:0 0 10px 0">
                                <i class="fas fa-plus"></i>
                            </a>
                            <br>
                            <div class="btn-group">
                            @foreach ($nav->where('ops2', $navside->id)->sortBy('order') as $item)
                                <div class="btn-group mx-1">
                                    <a href="{{route('menuEdit', $item->id)}}" class="btn btn-primary btn-xs">
                                        {{$item->indtitle}}&ensp;
                                        @if ($item->view == 0)
                                            <i class="fa fa-eye-slash"></i>
                                        @endif
                                    </a>
                                    <form method="POST" action="{{route('page.destroy', [$item->id])}}" class="d-inline" onsubmit="return confirm('Delete this data permanently?')">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        {{-- <input type="submit" value="Delete" class="btn btn-danger btn-sm"> --}}
                                        <button class="btn btn-danger btn-xs" type="submit">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            @endforeach
                            </div>
                        @endif
                    @endif
                </div>
                </div>
          </div>
        @endif
      </div>
    </div>
    <div class="modal fade" id="modal-default2" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="{{ route('page.store') }}" method="POST">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Submenu</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="ops1" value="{{$navhead->id ?? '0'}}">
                    <input type="hidden" name="format" value="2">
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
    <div class="modal fade" id="modal-default3" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="{{ route('page.store') }}" method="POST">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Sub Submenu</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="ops1" value="{{$navhead->id ?? '0'}}">
                    <input type="hidden" name="ops2" value="{{$navside->id ?? '0'}}">
                    <input type="hidden" name="format" value="4">
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
</div>
