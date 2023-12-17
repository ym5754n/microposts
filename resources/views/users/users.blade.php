@if (count($users) > 0)
    <div class="grid grid-rows-[auto_50px]">
        <ul class="list-unstyled overflow-y-scroll no-scrollbar">
            @foreach ($users as $user)
                <li class="m-1 shadow rounded">
                    <div class="p-3">
                        <div class="pb-3 font-medium">
                            <a href="{{ route('users.show', ['id' => $user->id]) }}" class="flex items-center">
                                <div class="w-20 h-20 mr-3 rounded-full shadow-lg flex items-center justify-center">
                                    <i class="fas fa-user fa-2x"></i>
                                </div>
                                {{ $user->name }}
                            </a>
                        </div>
                        @if (Auth::id() !== $user->id)
                            <hr>
                            <div class="pt-3">
                                <div class="flex justify-end">
                                    @include('buttons.followButton')
                            </div>
                        @endunless
                    </div>
                </li>
            @endforeach
        </ul>
        {{ $users->links() }}
    </div>
@endif