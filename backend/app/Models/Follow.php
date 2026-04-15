<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    public $timestamps = false;

    protected $fillable = ['follower_id', 'following_id'];

    protected static function booted()
    {
        static::creating(function ($follow) {
            $follow->created_at = now();
        });
    }
}
