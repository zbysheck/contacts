<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    public function showList(){

        $contacts = \App\Contact::all();//Contact::all();
        return view("contactList")->with("contacts", $contacts);
    }

    public function single($id){
        $contact = \App\Contact::find($id);
        return view("singleContact")->with("contact", $contact);
    }

    public function edit($id){
        $contact = \App\Contact::find($id);
        return view("editContact")->with("contact", $contact);
    }
}
