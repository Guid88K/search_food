<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ingredient extends Model
{
    protected $fillable = [
        'name',
    ];

    public function food_ing(): HasMany
    {
        return $this->hasMany('App\FoodIng');
    }
}
