<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function favorite(Request $request, $id) {
        \Auth::user()->favorite($id);
        return back();
    }

    public function unfavorite($id) {
        \Auth::user()->unfavorite($id);
        return back();
    }
}
