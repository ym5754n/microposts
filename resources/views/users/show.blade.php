@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            @include('users.card', ['user' => $user])
        </aside>
        <div class="col-sm-8">
            @include('users.navtabs', ['user' => $user])
            @if (Auth::id() == $user->id)
                <form action="{{ route('microposts.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="textarea" class="form-control" rows="2" name="content" value="{{ old('content') }}">
                        <input type="submit" class="btn btn-primary btn-block" value="Post">
                    </div>
                </form>
            @endif
            @if (count($microposts) > 0)
                @include('microposts.microposts', ['microposts' => $microposts])
            @endif
        </div>
    </div>
@endsection