<?php

namespace App;

use App\Constant\FileConstant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Partner extends Model
{
    protected $guarded = [];

    public function sliders(){
        return $this->hasMany(PartnerSlider::class);
    }

    public function programs(){
        return $this->hasMany(PartnerProgram::class);
    }

    public function links(){
        return $this->hasMany(PartnerLink::class);
    }

    public function getMainLogoAttribute()
    {
        return asset(FileConstant::PARTNER_LOGO . '/' . $this->home_logo);
    }

    public function getStoreLogoAttribute()
    {
        return asset(FileConstant::DETAIL_LOGO . '/' . $this->details_logo);
    }

    public function setSlugAttribute(){
        $this->attributes['slug'] = Str::slug($this->name , "-");
    }
}
