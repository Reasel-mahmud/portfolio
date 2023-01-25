<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    private static $service;

    public static function saveService($request){
        self::$service = new Service();
        self::$service->service_name = $request->service_name;
        self::$service->service_descripsion = $request->service_descripsion;
        self::$service->service_icone = $request->service_icone;
        self::$service->save();
    }
}



