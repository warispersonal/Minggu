<?php

namespace App\Models;

use App\Constant\FileConstant;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected  $guarded = [];

    public function getProgramImageAttribute()
    {
        return asset(FileConstant::PROGRAM_THUMBNAIL . '/' . $this->thumbnail_image);
    }

    public function getRelatedDatesAttribute(){
        $programs = Program::where("partner_id", $this->partner_id)->get();
        return $programs;
    }
}
