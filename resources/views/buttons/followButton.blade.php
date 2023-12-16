@if (Auth::id() != $user->id)
    @if (Auth::user()->isFollowing($user->id))
        <form action="{{ route('userFollow.unfollow', ['id' => $user->id]) }}" method="POST">
            @method('delete')
            @csrf
            <input type="submit" class="px-2 py-1 border border-current rounded text-sm text-slate-100 bg-slate-300" value="Unfollow">
        </form>
    @else
        <form action="{{ route('userFollow.follow', ['id' => $user->id]) }}" method="POST">
            @csrf
            <input type="submit" class="px-2 py-1 border border-current rounded text-sm text-slate-100 bg-slate-800" value="Follow">
        </form>
    @endif
@endif