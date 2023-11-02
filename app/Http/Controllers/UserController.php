<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class UserController extends Controller
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

        return view('users.show', [
            'user' => $user,
        ]);
    }
}
