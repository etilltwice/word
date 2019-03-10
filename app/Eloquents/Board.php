<?php

namespace App\Eloquents;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $table = 'boards';

    // リレーション
    public function users()
    {
        return $this->belongsTo('App\User', 'author_id', 'id');
    }

    public function characters()
    {
        return $this->belongsTo('App\Eloquents\Characte', 'author_id', 'id');
    }

    public function responses()
    {
        return $this->hasMany('App\Eloquents\Response', 'board_id', 'id');
    }
}
