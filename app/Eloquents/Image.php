<?php

namespace App\Eloquents;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    //  リレーション
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
