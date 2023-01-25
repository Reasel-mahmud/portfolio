<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    private static $skil;

    public static function saveSkill($request){
        $request->validate([
            'skill_name' => 'bail|required|max:10',
            'skill_percenteg' => 'bail|required|min:10%',
        ]);
        self::$skil = new Skill();
        self::$skil->skill_name = $request->skill_name;
        self::$skil->skill_percenteg = $request->skill_percenteg;
        self::$skil->save();
    }
}


