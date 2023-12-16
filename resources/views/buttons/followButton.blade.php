@if (Auth::id() != $user->id)
    @if (Auth::user()->isFollowing($user->id))
        <form action="{{ route('userFollow.unfollow', ['id' => $user->id]) }}" method="POST">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-light btn-sm mr-1 text-red-600">
                <i class="fas fa-user-minus"></i>
            </button>
        </form>
    @else
        <form action="{{ route('userFollow.follow', ['id' => $user->id]) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-light btn-sm mr-1 text-blue-600">
                <i class="fas fa-user-plus"></i>
            </button>
        </form>
    @endif
@endif