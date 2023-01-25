<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    private static $project,$image,$imageName,$imagUrl,$dirc;

    public static function saveProject($request){
        self::$project = new Project();
        self::$project->project_name = $request->project_name;
        self::$project->project_title = $request->project_title;
        self::$project->clients = $request->clients;
        self::$project->completion = $request->completion;
        self::$project->project_type = $request->project_type;
        self::$project->author = $request->author;
        self::$project->budget = $request->budget;
        self::$project->image = self::imaUrl($request);
        self::$project->save();
    }

    private static function imaUrl($request){
        self::$image= $request->file('image');
        self::$imageName =rand().'.'.self::$image->getClientOriginalExtension();
        self::$dirc = 'adminAsset/project-img/';
        self::$imagUrl =self::$dirc.self::$imageName;
        self::$image->move(self::$dirc,self::$imageName );
        return self::$imagUrl;
    }
}
