<?php

namespace App\Eloquents;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $table = 'responses';

    //  リレーション
    public function users()
    {
        return belongsTo('App\User', 'speaker_id', 'id');
    }

    public function characters()
    {
        return belongsTo('App\Eloquents\Character', 'speaker_id', 'id');
    }

    public function boards()
    {
        return belongsTo('App\Eloquents\Board', 'board_id', 'id');
    }
}
