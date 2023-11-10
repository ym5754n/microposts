@extends('layouts.app')

@section('content')
    @auth
        <div class="row">
            <aside class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ Auth::user()->name }}</h3>
                    </div>
                </div>
            </aside>
            <div class="col-sm-8">
                @if (Auth::id() == $user->id)
                    <form action="{{ route('microposts.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="textarea" class="form-control" name="content" rows="2" value="{{ old('content') }}">
                            <input type="submit" class="btn btn-primary btn-block">
                        </div>
                    </form>
                @endif
                @if (count($microposts) > 0)
                    @include('microposts.microposts', ['microposts' => $microposts])
                @endif
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Microposts</h1>
            </div>
        </div>
    @endauth
@endsection