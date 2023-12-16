<div class="grid grid-rows-[auto_50px]">
    <ul class="list-unstyled overflow-y-scroll no-scrollbar">
        @foreach ($microposts as $micropost)
            <li class="m-1 shadow rounded">
                <div class="p-3">
                    <div class="pb-1">
                        <a href="{{ route('users.show', ['id' => $micropost->user->id]) }}" class="font-medium">{{ $micropost->user->name }}</a> <span class="text-slate-400 text-sm">posted at {{ $micropost->created_at }}</span>
                    </div>
                    <hr>
                    <div>
                        <p class="mb-0">{!! nl2br(e($micropost->content)) !!}</p>
                    </div>
                    <div>
                        <div class="flex justify-end">
                            @include('buttons.favoriteButton')
                            @include('buttons.deleteButton')
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{ $microposts->links() }}
</div>
{{-- {{ $microposts->links('pagination::bootstrap-4') }} --}}
