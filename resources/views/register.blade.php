@extends('layouts.app')

@section('content')
<div class="w-full lg:w-4/12 px-4 mx-auto pt-4">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0">
            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                <div class="text-center my-5">
                    <h6 class="text-slate-800 font-bold">
                        Sign up
                    </h6>
                </div>
                <form action="" method="POST">
                    @csrf
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2" for="grid-password">Name</label>
                        <input type="text" placeholder="Name" name="name" required
                            class="border-0 px-3 py-3 placeholder-slate-400 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                    </div>
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2" for="grid-password">Email</label>
                        <input type="email" placeholder="Email" name="email" required
                            class="border-0 px-3 py-3 placeholder-slate-400 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                    </div>
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-slate-600 text-xs font-bold mb-2" for="grid-password">Password</label>
                        <input type="password" placeholder="Password" name="password" required
                            class="border-0 px-3 py-3 placeholder-slate-400 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                    </div>
                    <div class="text-center mt-6">
                        <button type="submit" class="bg-slate-800 text-slate-100 active:bg-slate-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150">
                            Sign up 
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection