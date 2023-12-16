<div class="w-full max-w-sm bg-slate-100 rounded-lg shadow">
    <div class="flex flex-col items-center py-4">
        <div class=" w-24 h-24 mb-3 rounded-full shadow-lg flex items-center justify-center">
            <i class="fas fa-user fa-3x"></i>
        </div>
        <h5 class="mb-1 text-xl font-medium text-gray-900">{{ $user->name }}</h5>
        <div class="py-2">
            <a href="{{ route('users.followings', ['id' => $user->id]) }}" class="text-sm text-slate-500 block">
                <i class="fas fa-user-plus"></i> <span class="">Followings </span><span>{{ $count_followings }}</span>
            </a>
            <a href="{{ route('users.followers', ['id' => $user->id]) }}" class="text-sm text-slate-500 block">
                <i class="fas fa-users"></i> <span class="">Followers </span><span>{{ $count_followers }}</span>
            </a>
        </div>
        @include('buttons.followButton', ['user' => $user])
    </div>
</div>