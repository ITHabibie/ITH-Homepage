<div>
    <a href="{{ route('posts.edit', $id) }}" class="btn btn-success btn-sm">Edit</a>
    <form method="POST" action="{{route('posts.destroy', [$id])}}" class="d-inline" onsubmit="return confirm('Move post to trash ?')">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Delete" class="btn btn-danger btn-sm">
    </form>
</div>
