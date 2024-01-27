<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comments extends Model
{
    protected $fillable = [
        'text',
        'user_id',
    ];

    public function recipe(): BelongsTo
    {
        return $this->belongsTo('App\Recipe');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
}
