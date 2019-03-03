<?php

namespace App\Eloquents;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills';

    // リレーション
    public function skills()
    {
        return belongsTo('App\Eloquents\Skill', 'character_id', 'id');
    }
}
