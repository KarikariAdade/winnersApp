<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $guarded = ['id'];

    public function league()
    {
        return $this->belongsTo(League::class, 'league_id');
    }

}
