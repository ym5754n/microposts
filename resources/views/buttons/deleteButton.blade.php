@if (Auth::id() == $micropost->user_id)
    <form action="{{ route('microposts.destroy', ['id' => $micropost->id]) }}" method="POST">
        @method('delete')
        @csrf
        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
    </form>
@endif