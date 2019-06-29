<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use CleanCodeStudio\LaravelTextMessages\Textable;
use CleanCodeStudio\LaravelAddresses\CanHaveAddress;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, Textable, CanHaveAddress;
    // Text Messages Package: https://github.com/clean-code-studio/laravel-text-messages
    // Addresses package: https://github.com/clean-code-studio/laravel-addresses

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'account',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function donations()
    {
        return $this->hasMany(Food::class, 'donor_id');
    }
}
