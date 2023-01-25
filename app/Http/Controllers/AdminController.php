<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home.home');
    }


    public function manageContact(){

        return view('admin.contact.manageContact',[
            'contacts'=>Contact::all()
        ]);
    }

    public function deleteContact(Request $request){
        $contact = Contact::find($request->contact_id);
        $contact->delete();
        return back();
    }
}
