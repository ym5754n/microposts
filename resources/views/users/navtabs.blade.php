<ul class="flex justify-start items-center m-1">
    <li class="rounded-l shadow p-2 bg-slate-200 [&.active]:text-slate-100 [&.active]:bg-slate-800 [&.active]:font-medium {{ Request::is('users/' . $user->id) ? 'active' : '' }}">
        <a href="{{ route('users.show', ['id' => $user->id]) }}" class="">
            TimeLine <span class="badge badge-secondary">{{ $count_microposts }}</span>
        </a>
    </li>
    <li class="shadow p-2 bg-slate-200 [&.active]:text-slate-100 [&.active]:bg-slate-800 [&.active]:font-medium {{ Request::is('users/*/followings') ? 'active' : '' }}">
        <a href="{{ route('users.followings', ['id' => $user->id]) }}" class="">
            Followings <span class="badge badge-secondary">{{ $count_followings }}</span>
        </a>
    </li>
    <li class="shadow p-2 bg-slate-200 [&.active]:text-slate-100 [&.active]:bg-slate-800 [&.active]:font-medium {{ Request::is('users/*/followers') ? 'active' : '' }}">
        <a href="{{ route('users.followers', ['id' => $user->id]) }}" class="">
            Followers <span class="badge badge-secondary">{{ $count_followers }}</span>
        </a>
    </li>
    <li class="rounded-r mr-1 shadow p-2 bg-slate-200 [&.active]:text-slate-100 [&.active]:bg-slate-800 [&.active]:font-medium {{ Request::is('users/*/favorites') ? 'active' : '' }}">
        <a href="{{ route('users.favorites', ['id' => $user->id]) }}" class="">
            Favorites <span class="badge badge-secondary">{{ $count_favorites }}</span>
        </a>
    </li>
</ul>