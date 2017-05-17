<?php

namespace CookingChallenge\Model;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    public $fillable = [
        'photo',
        'name',
        'description',
        'user_id',
    ];

    protected $appends = [
        'favorites_amount'
    ];

    public function getFavoritesAmountAttribute()
    {
        return $this->favorites()->count();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function favorites()
    {
        return $this->belongsToMany(User::class, 'favorites', 'user_id', 'dish_id')->withTimestamps();
    }
}
