<?php

namespace App\Http\Controllers;

use App\Models\SubSkill;
use Illuminate\Http\Request;

class SubskillController extends Controller
{
    public function addSkillsub(){
        return view('admin.skill.add-skillSub');
    }

    public function subSkillsave(Request $request){
        SubSkill::subSkillsave($request);
        return back();
    }

    public function subManage(){
        return view('admin.skill.subSkil-manage',[
            'subSkills'=>SubSkill::all()
        ]);
    }

    public function deleteSubSkill(Request $request){
        $subSkill = SubSkill::find($request->subSkill_id);
        $subSkill->delete();
        return back();
    }

}
