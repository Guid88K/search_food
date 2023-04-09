<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
        'text',
        'user_id'
    ];

    public function recipe()
    {
        return $this->belongsTo('App\Recipe');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
