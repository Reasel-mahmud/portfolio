<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{

    public function index(){
        return view('admin.banner.add-banner');
    }

    public function saveBanner(Request $request){
        Banner::saveBanner($request);
        return back();
    }
    public function manageBanner(){
        return view('admin.banner.manage-banner',[
            'banners'=>Banner::all()
        ]);
    }
    public function status($id){
        $banner = Banner::find($id);
        if($banner->status ==1){
            $banner->status =0;
        }else{
            $banner->status =1;
        }
        $banner->save();
        return back();
    }

    public function deleteBanner(Request $request){
        $banner = Banner::find($request->banner_id);
        if ($banner->image) {
            if(file_exists($banner->image)){
                unlink($banner->image);
            }
        }
        $banner->delete();
        return back();
    }



}
