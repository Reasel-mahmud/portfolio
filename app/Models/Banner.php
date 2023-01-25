<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    private static $banner, $image,$imageName,$dirc,$imagUrl;

    public static function saveBanner($request){
        self::$banner = new Banner();
        self::$banner->name = $request->name;
        self::$banner->image =self::imaUrl($request);
        self::$banner->short_description = $request->short_description;
       self::$banner->save();

    }

    private static function imaUrl($request){
        self::$image= $request->file('image');
        self::$imageName =rand().'.'.self::$image->getClientOriginalExtension();
        self::$dirc = 'adminAsset/banner-ima/';
        self::$imagUrl =self::$dirc.self::$imageName;
        self::$image->move(self::$dirc,self::$imageName );
        return self::$imagUrl;
    }
}
