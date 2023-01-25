<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function addExperience(){
        return view('admin.experience.add-experience');
    }

    public function saveExperience(Request $request){
        Experience::saveExperience($request);
        return back();
    }


    public function manageExperience(){
        return view('admin.experience.manage-experience',[
            'experiences'=>Experience::all()
        ]);
    }
    public function deleteExperience(Request $request){
        $experience = Experience::find($request->experience_id);

        $experience->delete();
        return back();
    }

}
