@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-12 grid-rows-1 gap-4 mx-4 max-h-full">
        <aside class="col-span-4">
            @include('users.card', ['user' => $user])
        </aside>
        <div class="col-span-8 grid grid-rows-[50px_calc(100%-50px)]">
            @include('users.navtabs', ['user' => $user])
            @include('microposts.microposts', ['microposts' => $favorites])
        </div>
    </div>
@endsection