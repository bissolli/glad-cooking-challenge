<?php

namespace CookingChallenge\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'born_at',
        'mobile',
        'gender',
        'country_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $dates = [
        'born_at'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function dishes()
    {
        return $this->hasMany(Dish::class);
    }

    public function favorites()
    {
        return $this->belongsToMany(Dish::class, 'favorites', 'user_id', 'dish_id')->withTimestamps();
    }
}
