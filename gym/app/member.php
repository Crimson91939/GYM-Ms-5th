<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class member extends Authenticatable
{
    use Notifiable;

    protected $guard='member';
    
    protected $guarded=[];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function gym()
    {
        return $this->belongsTo(gym::class);
    }
}
