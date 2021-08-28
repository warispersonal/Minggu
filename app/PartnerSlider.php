<?php

namespace App;

use App\Constant\FileConstant;
use Illuminate\Database\Eloquent\Model;

class PartnerSlider extends Model
{
    protected $guarded = [];

    public function getSliderImageAttribute()
    {
        return asset(FileConstant::PARTNER_SLIDER . '/' . $this->slider);
    }
}
