@if (Auth::id() == $micropost->user_id)
    <form action="{{ route('microposts.destroy', ['id' => $micropost->id]) }}" method="POST" class="p-1">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-light btn-sm mr-1 text-red-600">
            <i class="fas fa-trash"></i>
        </button>
    </form>
@endif