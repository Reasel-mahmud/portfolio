<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function addSkill(){
        return view('admin.skill.add-skill');
    }

    public function saveSkill(Request $request){
        Skill::saveSkill($request);
        return back();
    }
    public function mangeSkill(){
        return view('admin.skill.manage-skill',[
            'skills'=>Skill::all()
        ]);
    }

    public function status($id){
        $skill = Skill::find($id);
       if($skill->status == 1){
        $skill->status = 0;
       }else{
        $skill->status = 1;
       }
       $skill->save();
       return back();
    }

    public function deleteSkill(Request $request){
        $skill = Skill::find($request->skill_id);
        $skill->delete();
        return back();
    }


}
