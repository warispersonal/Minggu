<?php

namespace App;

use App\Constant\FileConstant;
use Illuminate\Database\Eloquent\Model;

class PartnerPromotion extends Model
{
    protected $guarded = [];

    public function getPromotionLogoAttribute()
    {
        return asset(FileConstant::PARTNER_PROMOTION . '/' . $this->promotion_image);
    }
}
