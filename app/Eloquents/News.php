<?php

namespace App\Eloquents;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    //  リレーション
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
