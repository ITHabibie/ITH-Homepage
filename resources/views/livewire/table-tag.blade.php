<div>
    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal-{{ $id }}">
        Edit
    </button>
    <form method="POST" action="{{route('tags.destroy', [$id])}}" class="d-inline" onsubmit="return confirm('Delete this data permanently?')">
    @csrf
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Delete" class="btn btn-danger btn-sm">
    </form>
    <!-- Edit Modal -->
    <div class="modal fade" id="editModal-{{ $id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Tag</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('tags.update', $id) }}" method="POST">
                        <input type="hidden" name="_method" value="PUT">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama (Indonesia)</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{ $name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="eng">Name (English)</label>
                            <input type="text" name="eng" class="form-control" id="eng" value="{{ $engtitle }}" required>
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" class="form-control" id="slug" value="{{ $slug }}" required>
                        </div>
                        <div class="form-group">
                            <label for="keywords">Keywords</label>
                            <input type="text" name="keywords" class="form-control" id="keywords" value="{{ $keywords }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
