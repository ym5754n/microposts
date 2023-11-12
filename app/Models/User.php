<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function microposts() {
        return $this->hasMany(Micropost::class);
    }

    public function followings() {
        return $this->belongsToMany(User::class, 'user_follow', 'user_id', 'follow_id')->withTimeStamps();
    }

    public function followers() {
        return $this->belongsToMany(User::class, 'user_follow', 'follow_id', 'user_id')->withTimeStamps();
    }

    public function follow($userId) {
        $exist = $this->isFollowing($userId);
        $itsMe = $this->id == $userId;

        if ($exist || $itsMe) {
            return false;
        } else {
            $this->followings()->attach($userId);
            return true;
        }
    }

    public function unfollow($userId) {
        $exist = $this->isFollowing($userId);
        $itsMe = $this->id == $userId;

        if ($exist && !$itsMe) {
            $this->followings()->detach($userId);
            return true;
        } else {
            return false;
        }
    }

    public function isFollowing($userId) {
        return $this->followings()->where('follow_id', $userId)->exists();
    }

    public function feedMicroposts() {
        $followUserIds = $this->followings()->pluck('users.id')->toArray();
        $followUserIds[] = $this->id;

        return Micropost::whereIn('user_id', $followUserIds);
    }
}
