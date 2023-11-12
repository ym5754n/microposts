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
                    <div class="d-flex justfy-content-between">
                        @include('buttons.favoriteButton')
                        @include('buttons.deleteButton')
                    </div>
                </div>
            </div>
        </li>
    @endforeach
</ul>
{{ $microposts->links('pagination::bootstrap-4') }}
