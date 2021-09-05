<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLottery extends Model
{
    protected $guarded = [ ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function lottery(){
        return $this->belongsTo(Lottery::class);
    }
}
