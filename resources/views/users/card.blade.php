<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $user->name }}</h3>
    </div>
</div>
@include('userFollow.followButton', ['user' => $user])