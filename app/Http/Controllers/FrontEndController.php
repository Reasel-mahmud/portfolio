<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Experience;
use App\Models\FrontEand;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use App\Models\SubSkill;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $skill = Skill::where('status',1)->get();
        $banner=Banner::where('status',1)->take(1)->get();
        return view('frontEnd.home.home',[
            'banners'=> $banner,
            'skills'=> $skill,
            'subSkills'=>SubSkill::all()->take(1),
            'services'=>Service::all()->take(3),
            'experinces'=>Experience::all()->take(3),
            'projects'=>Project::all()->take(1)
        ]);
    }

   
}
