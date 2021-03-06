<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable 
// implements MustVerifyEmail
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // Added 'provider' and 'provider_id' for social media login
        'name', 'email', 'password', 'provider', 'provider_id'
        /*, 'ic_number'*/
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Model relationships
    public function posts() {
        return $this->hasMany('App\Post');
    }

    // Function to generate token
    public function generateToken() {
        $this->api_token = str_random(60);
        $this->save();

        return $this->api_token;
    }
}
