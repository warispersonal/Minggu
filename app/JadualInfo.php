<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadualInfo extends Model
{
    protected $fillable = [
        'time',
        'name',
        'description',
        'jadual_id'
    ];
}
