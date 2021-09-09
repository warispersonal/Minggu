<?php

namespace App;

use App\Constant\FileConstant;
use App\Models\Program;
use Embera\Embera;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Partner extends Model
{
    protected $guarded = [];

    public function sliders()
    {
        return $this->hasMany(PartnerSlider::class);
    }

    public function promotions()
    {
        return $this->hasMany(PartnerPromotion::class);
    }

    public function programs()
    {
        return $this->hasMany(Program::class);
    }

    public function links()
    {
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

    public function getPromosiLogoAttribute()
    {
        return asset(FileConstant::PROMOSI_IMAGE . '/' . $this->promosi_image);
    }

    public function setSlugAttribute()
    {
        $this->attributes['slug'] = Str::slug($this->name, "-");
    }

    public function getVideoUrlAttribute()
    {
        $embera = new Embera();
        return $embera->autoEmbed($this->video_link);
    }
}
