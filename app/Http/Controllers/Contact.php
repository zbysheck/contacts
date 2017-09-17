<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    public function showList(){

        $contacts = \App\Contact::all();//Contact::all();
        return view("contactList")->with("contacts", $contacts);
    }
}
