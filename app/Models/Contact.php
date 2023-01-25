<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    private static $contact;
    public static function contact($request){
        $request->validate([
            'name' => 'bail|required|',
            'email' => 'bail|required|',
            'message' => 'bail|required|max:200',
        ]);
       self::$contact =new Contact();
       self::$contact->name = $request->name;
       self::$contact->email = $request->email;
       self::$contact->message = $request->message;
       self::$contact->save();

    }

}
