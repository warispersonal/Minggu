<?php

namespace App\Models;

use App\Constant\FileConstant;
use App\Partner;
use Carbon\Carbon;
use Embera\Embera;
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
    public function getVideoUrlAttribute()
    {
        $embera = new Embera();
        return $embera->autoEmbed($this->video_link);
    }
    public function getDateFormatAttribute()
    {
       return Carbon::parse($this->date)->format('d-m-Y');
    }

    public function getTimeFormatAttribute()
    {
        return Carbon::parse($this->time)->format('H:i');
    }
}
