<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{
    protected $fillable = [
        'first_name',
        'last_name', 
        'dob',
        'avatar',
        'nic',
        'passport',
        'job',
        'income',
        'phone',
        'mobile',
        'user_id',
        'address',
        'state',
        'city',
        'nic_copy'

    ];

    public function user()
   {
     return $this->belongsTo('App\User');
   }
}
