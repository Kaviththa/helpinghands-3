<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = [
        'type', 'reason', 'category_of_help', 'user_id'
    ];
}
