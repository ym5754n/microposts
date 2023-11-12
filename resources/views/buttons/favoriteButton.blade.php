@if (Auth::user()->isFavorite($micropost->id))
    <form action="{{ route('favorite.unfavorite', ['id' => $micropost->id]) }}" method="POST">
        @method('delete')
        @csrf
        <input type="submit" class="btn btn-success btn-sm mr-1" value="Unfavorite">
    </form>
@else
    <form action="{{ route('favorite.favorite', ['id' => $micropost->id]) }}" method="POST">
        @csrf
        <input type="submit" class="btn btn-light btn-sm" value="Favorite">
    </form>
@endif