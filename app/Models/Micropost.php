<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function favariteUsers() {
        return $this->belongsToMany(User::class, 'favorites', 'micropost_id', 'user_id')->withTimeStamps();
    }
}
