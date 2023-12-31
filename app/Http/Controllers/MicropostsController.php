<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Micropost;
use App\Models\User;

class MicropostsController extends Controller
{
    public function index() {
        $data= [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $microposts = $user->feedMicroposts()->orderBy('created_at', 'desc')->simplePaginate(10);

            $data = [
                'user' => $user,
                'microposts' => $microposts,
            ];

            $data += $this->counts($user);
        }

        return view('welcome', $data);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'content' => 'required|max:191',
        ]);

        $request->user()->microposts()->create([
            'content' => $request->content,
        ]);

        return back();
    }

    public function destroy($id) {
        $micropost = Micropost::find($id);

        if(\Auth::id() == $micropost->user_id) {
            $micropost->delete();
        }

        return back();
    }
}
