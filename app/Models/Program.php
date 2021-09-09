<?php

namespace App\Models;

use App\Constant\FileConstant;
use App\Partner;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected  $guarded = [];

    public function getProgramImageAttribute()
    {
        return asset(FileConstant::PROGRAM_THUMBNAIL . '/' . $this->thumbnail_image);
    }

    public function getRelatedDatesAttribute(){
        $programs = Program::where("main_program_id", $this->main_program_id)->get();
        return $programs;
    }

    public function partner(){
        return $this->belongsTo(Partner::class);
    }
      public function main_program(){
        return $this->belongsTo(MainProgram::class);
    }

    public function getValidURLAttribute(){
        if (filter_var($this->video_link, FILTER_VALIDATE_URL) === FALSE) {
            return false;
        }
        else{
            return true;
        }
    }

}
