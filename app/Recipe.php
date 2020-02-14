<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Recipe extends Model
{
    protected $fillable = [
        'recipe_name',
        'recipe_image',
        'recipe_description',
        'kind_of_recipe',
        'ing_for_filter'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function food_recipe()
    {
        return $this->hasMany('App\FoodRecipe');
    }

    public function food_ing()
    {
        return $this->hasMany('App\FoodIng');
    }


}
