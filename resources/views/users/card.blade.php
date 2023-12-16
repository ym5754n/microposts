<div class="w-full max-w-sm bg-slate-100 rounded-lg shadow">
    <div class="flex flex-col items-center py-4">
        <div class=" w-24 h-24 mb-3 rounded-full shadow-lg flex items-center justify-center">
            <i class="fas fa-user fa-3x"></i>
        </div>
        <h5 class="mb-1 text-xl font-medium text-gray-900">{{ $user->name }}</h5>
        @include('buttons.followButton', ['user' => $user])
    </div>
</div>