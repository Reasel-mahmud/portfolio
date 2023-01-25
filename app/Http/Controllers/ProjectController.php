<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function addProject(){
        return view('admin.featured_project.add-project');
    }


    public function manageProject(){
        return view('admin.featured_project.manage-project',[
            'projects'=> Project::all()
        ]);
    }

    public function saveProject(Request $request){
        Project::saveProject($request);
        return back();
    }

}
