<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Micropost;

class UsersController extends Controller
{
    protected $redirectTo = '/';

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $users = User::orderBy('id', 'desc')->paginate(10);

        return view('users.index', [
            'users' => $users,
        ]);
    }

    public function show($id) {
        $user = User::find($id);
        $microposts = $user->microposts()->orderBy('created_at', 'desc')->simplePaginate(10);

        $data = [
            'user' => $user,
            'microposts' => $microposts,
        ];

        $data += $this->counts($user);

        return view('users.show', $data);
    }

    public function followings($id) {
        $user = User::find($id);
        $followings = $user->followings()->paginate(10);

        $data = [
            'user' => $user,
            'users' => $followings,
        ];

        $data += $this->counts($user);

        return view('users.followings', $data);
    }

    public function followers($id) {
        $user = User::find($id);
        $followers = $user->followers()->paginate(10);

        $data = [
            'user' => $user,
            'users' => $followers,
        ];

        $data += $this->counts($user);

        return view('users.followers', $data);
    }

    public function favorites($id) {
        $user = User::find($id);
        $favorites = $user->favorites()->paginate(10);

        $data = [
            'user' => $user,
            'favorites' => $favorites,            
        ];

        $data += $this->counts($user);

        return view('users.favorites', $data);
    }
}
