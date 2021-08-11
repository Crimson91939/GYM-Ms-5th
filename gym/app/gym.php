<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class gym extends Authenticatable
{
    use Notifiable;

    
    protected $guard='gym';
    protected $guarded=[];

   

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

        //activity
        public function Scopeactivegym($query)
        {
            return $query->where('status',1);
        }
        
        public function Scopeinactivegym($query)
        {
            return $query->where('status',0);
        }
 
        public function admins()                        //db relations
        {
            return $this->belongsTo(admin::class);
        }
    
        public function members()                               
        {
            return $this->hasMany(member::class);
        }
}
