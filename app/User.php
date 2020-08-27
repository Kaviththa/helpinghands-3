<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Document;
use App\Role;
use App\Helper;
use App\Team;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',


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

        'mobile_verified_at' => 'datetime'
    ];


    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }

    public function documents(){
        return $this->hasMany('App\Document');
      }


      public function helper(){

        return $this->hasOne('App\Helper');

      }
      public function team(){

        return $this->hasOne('App\Team');

      }
}
