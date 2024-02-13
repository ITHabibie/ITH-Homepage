<div>
    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModallink-{{ $id }}">
        Edit
    </button>
    <form method="POST" action="{{route('destroyLink', [$id])}}" class="d-inline" onsubmit="return confirm('Delete this data permanently?')">
        @csrf
        <input type="hidden" name="id" value="{{$id}}">
        <input type="submit" value="Delete" class="btn btn-danger btn-sm">
    </form>
    <!-- Edit Modal -->
    <div class="modal fade" id="editModallink-{{ $id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Link</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('updateLink') }}" method="POST">
                        <input type="hidden" name="idE" value="{{$id}}">
                        @csrf
                        <div class="form-group">
                            <label for="ind">Nama (Indonesia)</label>
                            <input type="text" name="ind" class="form-control" id="ind" value="{{ $indtitle }}" required>
                        </div>
                        <div class="form-group">
                            <label for="eng">Name (English)</label>
                            <input type="text" name="eng" class="form-control" id="eng" value="{{ $engtitle }}" required>
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" name="link" class="form-control" id="link" value="{{ $link }}" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
