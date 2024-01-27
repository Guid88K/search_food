<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FoodIng extends Model
{
    protected $fillable = [
        'ingredient_count',
        'ingredient_kind',
    ];

    public function recipe(): BelongsTo
    {
        return $this->belongsTo('App\Recipe');
    }
    public function ingredient(): BelongsTo
    {
        return $this->belongsTo('App\Ingredient');
    }
}
