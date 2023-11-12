@if (Auth::id() != $user->id)
    @if (Auth::user()->isFollowing($user->id))
        <form action="{{ route('userFollow.unfollow', ['id' => $user->id]) }}" method="POST">
            @method('delete')
            @csrf
            <input type="submit" class="btn btn-danger btn-block" value="Unfollow">
        </form>
    @else
        <form action="{{ route('userFollow.follow', ['id' => $user->id]) }}" method="POST">
            @csrf
            <input type="submit" class="btn btn-primary btn-block" value="Follow">
        </form>
    @endif
@endif