<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    protected $guarded = ['id'];

    public function matches()
    {
        return $this->hasMany(Match::class, 'league_id');
    }
}
