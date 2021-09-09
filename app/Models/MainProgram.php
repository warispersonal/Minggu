<?php

namespace App\Models;

use App\Constant\FileConstant;
use Illuminate\Database\Eloquent\Model;

class MainProgram extends Model
{
    protected $guarded = [];

    public function getMainLogoAttribute()
    {
        if($this->storage_type == 0){
            return url('storage/' . $this->logo);
        }
        else{
            return asset(FileConstant::MAIN_PROGRAM_LOGO . '/' . $this->logo);
        }
    }

    public function programs(){
        return $this->hasMany(Program::class);
    }

    public function getFirstProgramAttribute(){
        return Program::where("main_program_id",$this->id)->get()->first();
    }
}
