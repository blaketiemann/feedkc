<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
        'name',
        'status',
        'message',
        'business',
        'category',
        'expires_on',
        'quantity_unit',
        'quantity_amount',
    ];

    public function donor()
    {
        return $this->belongsTo(User::class, 'donor_id');
    }

}
