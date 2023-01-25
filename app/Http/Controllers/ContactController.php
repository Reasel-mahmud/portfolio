<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request){
        Contact::contact($request);
        return redirect(route('contact.post'))->with('msgContact','Send Message Succssfully');
    }
}
