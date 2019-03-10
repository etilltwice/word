<?php

namespace App\Eloquents;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $table = 'characters';

    // リレーション
    public function boards()
    {
        return $this->hasMany('App\Eloquents\Board', 'author_id', 'id');
    }

    public function responses()
    {
        return $this->hasMany('App\Eloquents\Response', 'speaker_id', 'id');
    }

    public function skills()
    {
        return $this->hasMany('App\Eloquents\Skill', 'character_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
