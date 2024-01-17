<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Recipe extends Model
{
    protected $fillable = [
        'recipe_name',
        'recipe_image',
        'recipe_description',
        'kind_of_recipe',
        'ing_for_filter',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }

    public function food_recipe(): HasMany
    {
        return $this->hasMany('App\FoodRecipe');
    }

    public function food_ing(): HasMany
    {
        return $this->hasMany('App\FoodIng');
    }

    public function comment()
    {
        return $this->hasMany('App\Comments');
    }


}
