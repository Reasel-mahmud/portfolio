<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    private static $experience;

    public static function saveExperience($request){
        self::$experience = new Experience();
        self::$experience->compony_name = $request->compony_name;
        self::$experience->date = $request->date;
        self::$experience->postion = $request->postion;
        self::$experience->description = $request->description;
        self::$experience->save();
    }
}




