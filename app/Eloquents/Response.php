<?php

namespace App\Eloquents;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $table = 'responses';

    //  リレーション
    public function users()
    {
        return $this->belongsTo('App\User', 'speaker_id', 'id');
    }

    public function characters()
    {
        return $this->belongsTo('App\Eloquents\Character', 'speaker_id', 'id');
    }

    public function boards()
    {
        return $this->belongsTo('App\Eloquents\Board', 'board_id', 'id');
    }
}
