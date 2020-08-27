<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Helper extends Model
{

    protected $fillable = [
        'user_id',
        'dob',
        'job',
        'income',
        'phone',
        'gender',
        'n/p',
        'nic',
        'passport',
        'copy',
        'address',
        'city',
        'province',
        'country',
        'avatar'


    ];




    protected $casts = [

        'approved_at' => 'datetime',

    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
