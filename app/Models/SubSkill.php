<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSkill extends Model
{
    use HasFactory;

    private static $subSkill;
    public static function subSkillsave($request){
        self::$subSkill= new SubSkill();
        self::$subSkill->skill_description =$request->skill_description;
        self::$subSkill->skill_exp =$request->skill_exp;
        return self::$subSkill->save();
    }
}
