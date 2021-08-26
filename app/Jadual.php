<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadual extends Model
{
    protected $fillable = [
        'date'
    ];

    public function jadual_info()
    {
        return $this->hasMany(JadualInfo::class);
    }
}
