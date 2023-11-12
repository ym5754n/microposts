@if (Auth::id() == $user->id)
    <form action="{{ route('microposts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="textarea" class="form-control" rows="2" name="content" value="{{ old('content') }}">
            <input type="submit" class="btn btn-primary btn-block" value="Post">
        </div>
    </form>
@endif