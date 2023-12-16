@extends('layouts.app')

@section('content')
    @auth
        <div class="grid grid-cols-12 grid-rows-1 gap-4 mx-4 max-h-full">
            <aside class="col-span-4">
                @include('users.card', ['user' => Auth::user()])
            </aside>
            <div class="col-span-8 grid grid-rows-[100px_calc(100%-100px)]">
                @if (Auth::id() == $user->id)
                    <form action="{{ route('microposts.store') }}" method="POST"
                        class="m-1 border border-slate-200 rounded-lg bg-slate-50">
                        @csrf
                        <div class="border border-slate-200 rounded-lg">
                            <div class="px-2 pt-1 bg-white rounded-t-lg">
                                <label for="content" class="sr-only">Your comment</label>
                                <textarea id="content" name="content" rows="2" class="w-full px-0 text-sm placeholder-slate-400 text-slate-600 bg-white border-0 focus:ring-0" placeholder="Write a post..." required></textarea>
                            </div>
                            <div class="flex items-center justify-end px-2 py-1 border-t">
                                <button type="submit" class="inline-flex items-right py-1.5 px-4 text-sm font-medium text-center text-slate-100 bg-slate-800 rounded-lg focus:ring-4 focus:ring-blue-200 hover:bg-blue-800">
                                    Post
                                </button>
                            </div>
                        </div>
                    </form>
                @endif
                @if (count($microposts) > 0)
                    @include('microposts.microposts', ['microposts' => $microposts])
                @endif
            </div>
        </div>
    @else
        <div class="grid h-full items-center justify-center">
            <h1>Welcome to the Microposts!</h1>
        </div>
    @endauth
@endsection