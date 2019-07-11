<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model {

    protected $fillable = [
        'name',
        'code',
        'latitude',
        'longitude',
        'description',
        'terms_and_conditions',
    ];
   
}
