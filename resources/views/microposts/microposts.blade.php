<ul class="list-unstyled">
    @foreach ($microposts as $micropost)
        <li class="media mb-3">
            <div class="media-body">
                <div>
                    <a href="{{ route('users.show', ['id' => $micropost->user->id]) }}">{{ $micropost->user->name }}</a> <span class="text-muted">posted at {{ $micropost->created_at }}</span>
                </div>
                <div>
                    <p class="mb-0">{!! nl2br(e($micropost->content)) !!}</p>
                </div>
                <div>
                    @if (Auth::id() == $micropost->user_id)
                        <form action="{{ route('microposts.destroy', ['id' => $micropost->id]) }}" method="POST">
                            @method('delete')
                            @csrf
                            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                        </form>
                    @endif
            </div>
        </li>
    @endforeach
</ul>
{{ $microposts->links('pagination::bootstrap-4') }}
