@if (Auth::user()->isFavorite($micropost->id))
    <form action="{{ route('favorite.unfavorite', ['id' => $micropost->id]) }}" method="POST" class="p-1">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-light btn-sm mr-1 text-yellow-600">
            <i class="fas fa-star"></i>
        </button>
    </form>
@else
    <form action="{{ route('favorite.favorite', ['id' => $micropost->id]) }}" method="POST" class="p-1">
        @csrf
        <button type="submit" class="btn btn-light btn-sm mr-1">
            <i class="far fa-star"></i>
        </button>
    </form>
@endif