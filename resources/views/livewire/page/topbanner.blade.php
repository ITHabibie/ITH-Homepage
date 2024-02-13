<div>


    @if ($alert)
    <div class="col-12">
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h6><i class="icon fas fa-check"></i>Successfull</h6>
        </div>
    </div>
@endif
@if ($alerts)
    <div class="col-sm-12">
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h6><i class="icon fas fa-ban"></i> Wrong</h6>
        </div>
    </div>
@endif

    <div class="card card-primary card-tabs">

        <div class="card-header p-0 pt-1">
          <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
            <li class="nav-item">
              <a type="button" class="nav-link" style ="background: {{ 'top' == $menu? 'white':''}}; color: {{ 'top' == $menu? '#007bff':''}}" wire:click="tabs('top','1')">
                  Top Banner
              </a>
            </li>
            <li class="nav-item">
                <a type="button" class="nav-link" style ="background: {{ 'mid' == $menu? 'white':''}}; color: {{ 'mid' == $menu? '#007bff':''}}" wire:click="tabs('mid','2')">
                    Mid Banner
                </a>
            </li>
            <li class="nav-item">
                <a type="button" class="nav-link" style ="background: {{ 'bottom' == $menu? 'white':''}}; color: {{ 'bottom' == $menu? '#007bff':''}}" wire:click="tabs('bottom','3')">
                    Bottom Banner
                </a>
            </li>
          </ul>
        </div>
        <div class="card-body">
            {{-- <div class="card-header ui-sortable-handle" style="margin-top: -20px">
                <div class="">
                    @if ($menu)
                        <div class="btn-group">
                            <button type="button" class="btn btn-app" style="height: 30px; padding: 5px 5px; margin-left: -4px" data-toggle="dropdown" aria-expanded="false">
                                Set Banner<span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu" role="menu" style="">
                            <a class="dropdown-item" href="#" wire:click="setFormat('format1')">Flat</a>
                            <a class="dropdown-item" href="#" wire:click="setFormat('format2')">Galery</a>
                            <a class="dropdown-item" href="#" wire:click="setFormat('format3')">Time Line</a>
                            </div>
                        </div>
                    @else
                        <i style="font-size: 17px" >Pilih Menu di atas</i>
                    @endif

                    @if ($menu && $setFormat)
                        <a class="btn btn-app" wire:click="openModals" style="height: 30px;  padding: 5px 5px;">
                            <i class="fas fa-plus"></i>
                        </a>
                        <center>
                        <h3 style="font-size: 23px">Model : {{$setFormat=='format1' ? 'Flat':''}}{{$setFormat == 'format2' ? 'Galery' : ''}} {{$setFormat == 'format3' ? 'Time Line':''}}</h3>
                        </center>
                    @endif
                </div>
              </div> --}}

            {{-- @if ($setFormat == 'format1') --}}
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Title (Indonesia)</th>
                            <th scope="col">Title (English)</th>
                            <th scope="col">image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($typesatu->where('alt3',$model) as $key => $item)
                            <tr>
                                <td>{{$item->menu}}</td>
                                <td>{{$item->engmenu}}</td>
                                <td>
                                    <img src="{{asset('storage/images/banner/'.$item->image)}}" style="height: 130px">
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-primary" wire:click="openEdit({{$item->id}})">edit</button>
                                    <button type="button"  class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-defaults{{$item->id}}">
                                        Delete
                                      </button>
                                </td>
                            </tr>
                            <div class="modal fade" id="modal-defaults{{$item->id}}" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Default Modal</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <p>One fine body…</p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <button data-dismiss="modal" class="btn btn-warning" wire:click="delt({{$item->id}})">delete</button>
                                    </div>
                                  </div>
                                  <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                              </div>
                        @endforeach
                    </tbody>
                </table>
            {{-- @else

            @endif --}}
        </div>
      </div>

    <div class="rounded bg-white">

    </div>

    @if ($openModals)
        <!-- /.card -->

        <div class="modal fade show" id="modal-lg" style="display: block; padding-right: 17px; background: rgba(255,255,255,0.8)" aria-modal="true" role="dialog">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Large Modal</h4>
                <button type="button" class="close" aria-label="Close">
                    <span wire:click="closeModals" aria-hidden="true">×</span>
                </button>
                </div>
                <div class="modal-body">
                <form>

                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                              
                         
                            <input type="file" wire:model="photo" accept="image/png, image/gif, image/jpeg">
                         
                            @error('photo') <span class="error">{{ $message }}</span> @enderror
                            @if ($photo)
                            Photo Preview:
                            <img src="{{ $photo->temporaryUrl() }}" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">

                            @else
                        <img src="{{asset('storage')}}/images/banner/{{$view}}" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">

                        @endif
                            </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="ind">Menu (Indonesia)</label>
                                {{-- <input wire:model="model" type="hidden" name="ind" class="form-control form-control-sm" id="ind"> --}}
                                <input wire:model="ids" type="hidden" name="ind" class="form-control form-control-sm" id="ind">
                                <input wire:model="ind" type="text" name="ind" class="form-control form-control-sm" id="ind" required>
                            </div>
                            <div class="form-group">
                                <label for="eng">Menu (English)</label>
                                <input type="eng" name="en" class="form-control form-control-sm" id="eng" wire:model="eng" required>
                            </div>
                            <div class="form-group">
                                <label for="indSub">Submenu (Indonesia)</label>
                                <input wire:model="indSub" type="text" name="indSub" class="form-control form-control-sm" id="indSub" required>
                            </div>
                            <div class="form-group">
                                <label for="engSub">Submenu (English)</label>
                                <input type="text" name="engSub" class="form-control form-control-sm" id="engSub" wire:model="engSub" required>
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input type="text" name="slug" class="form-control form-control-sm" id="slug" wire:model="slug" required>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select wire:model="status" name="status" id="status" class="form-control" required>
                                    <option value="" >Pilih</option>
                                    <option value="0" >Tidak Aktif</option>
                                    <option value="1" >Aktif</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="models">Posisi</label>
                                <select wire:model="models" name="models" id="models" class="form-control">
                                    <option value="">Pilih</option>
                                    <option value="1" >Top</option>
                                    <option value="2" >Mid</option>
                                    <option value="3" >Bottom</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6" wire:ignore>
                            <label for="desc" class="form-label">Content (Indonesia)</label>
                            <textarea wire:model="desc" name="desc" class="my-editor form-control" id="desc" cols="30" rows="10"></textarea>
                        </div>
                        <div class="col-6" wire:ignore>
                            <label for="content" class="form-label">Content (English)</label>
                            <textarea wire:model="content" name="content" class="my-editor form-control" id="content" cols="30" rows="10"></textarea>
                        </div>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                <button wire:click="closeModals" type="button" class="btn btn-default" >Close</button>
                <button wire:click.prevent="store()"  type="button" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
      @endif



</div>
