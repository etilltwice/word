<?php

namespace App\Eloquents;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $table = 'characters';

    // リレーション
    public function boards()
    {
        return hasMany('App\Eloquents\Board', 'author_id', 'id');
    }

    public function responses()
    {
        return hasMany('App\Eloquents\Response', 'speaker_id', 'id');
    }

    public function skills()
    {
        return hasMany('App\Eloquents\Skill', 'character_id', 'id');
    }

    public function users()
    {
        return belongsTo('App\User', 'user_id', 'id');
    }
}
