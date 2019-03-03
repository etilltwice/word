<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'profile',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // リレーション
    public function boards()
    {
        return hasMany('App\Eloquents\Board', 'author_id', 'id');
    }

    public function responses()
    {
        return hasMany('App\Eloquents\Response', 'speaker_id', 'id');
    }

    public function characters()
    {
        return hasMany('App\Eloquents\Character', 'user_id', 'id');
    }

    public function images()
    {
        return hasMany('App\Eloquents\Image', 'user_id', 'id');
    }

    public function news()
    {
        return hasMany('App\Eloquents\News', 'user_id', 'id');
    }
}
