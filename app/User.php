<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function recipe(): HasMany
    {
        return $this->hasMany('App\Recipe');
    }

    public function comment(): HasMany
    {
        return $this->hasMany('App\Comments');
    }

    public function saved_recipe(): HasMany
    {
        return $this->hasMany('App\SavedRecipe');
    }

    public function poll(): HasMany
    {
        return $this->hasMany('App\UserPoll');
    }

    public function recommendation(): HasMany
    {
        return $this->hasMany('App\UserRecommendation');
    }
}
