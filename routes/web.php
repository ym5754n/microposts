<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MicropostsController;
use App\Http\Controllers\UserFollowController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MicropostsController::class, 'index'])->name('index');

Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::middleware('auth')->group(function() {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
    Route::get('/users/{id}', [UsersController::class, 'show'])->name('users.show');

    Route::group(['prefix' => 'users/{id}'], function() {
        Route::post('follow', [UserFollowController::class, 'store'])->name('userFollow.follow');
        Route::delete('unfollow', [UserFollowController::class, 'destroy'])->name('userFollow.unfollow');
        Route::get('followings', [UsersController::class, 'followings'])->name('users.followings');
        Route::get('followers', [UsersController::class, 'followers'])->name('users.followers');
    });

    Route::delete('microposts/{id}', [MicropostsController::class, 'destroy'])->name('microposts.destroy');
    Route::post('microposts', [MicropostsController::class, 'store'])->name('microposts.store');
});