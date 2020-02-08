<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodIng extends Model
{
    protected $fillable = [
        'ingredient_name',
        'ingredient_count',
        'ingredient_kind'
    ];

    public function recipe()
    {
        return $this->belongsTo('App\Recipe');
    }
}
