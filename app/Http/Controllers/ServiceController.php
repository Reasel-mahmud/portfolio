<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function addService(){
        return view('admin.service.add-service');
    }

    public function saveService(Request $request){
        Service::saveService($request);
        return back();
    }

    public function manageService(){
       return view('admin.service.manage-service',[
        'services'=>Service::all()
       ]);
    }

    public function deleteService(Request $request){
        $service = Service::find($request->service_id);
        $service->delete();
        return back();
    }

}
