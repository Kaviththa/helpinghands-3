<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'user_id',
        'organization',
        'phone',
        'moblie',
        'lane',
        'city',
        'province',
        'country',
         'startup',
        'area',
        'achievement',
        'website',
        'avatar',
        'proof'


    ];

    // public function setCatAttribute($value)
    // {
    //     $this->attributes['area'] = json_encode($value);
    // }

    // /**
    //  * Get the categories
    //  *
    //  */
    // public function getCatAttribute($value)
    // {
    //     return $this->attributes['area'] = json_decode($value);
    // }


    protected $casts = [

        'approved_at' => 'datetime',

    ];




    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
