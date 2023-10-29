@extends('layouts.app')

@section('content')
    {{\Illuminate\Support\Facades\Auth::user()->name}}でログインしています。

    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button>ログアウト</button>
    </form>
@endsection