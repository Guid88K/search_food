<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodRecipe extends Model
{
    protected $fillable = [
        'image',
        'description',
    ];

    public function recipe()
    {
        return $this->belongsTo('App\Recipe');
    }
}
