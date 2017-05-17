<?php

namespace CookingChallenge\Model;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $fillable = [
        'name',
        'acronym',
        'nationality',
    ];

    public $timestamps = false;
}
