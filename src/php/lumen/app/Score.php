<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = [
        'name','seed_key','score'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
