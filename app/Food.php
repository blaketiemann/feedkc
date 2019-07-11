<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Food extends Model
{
    protected $fillable = [
        'name',
        'status',
        'message',
        'business',
        'category',
        'quantity_unit',
        'quantity_amount',
    ];

    protected $dates = [
        'expires_on',
    ];

    public function setExpiresOnAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d H:i:s');
    }

    public function donor()
    {
        return $this->belongsTo(User::class, 'donor_id');
    }

}
