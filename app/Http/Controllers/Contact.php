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

    public function add()
    {
        return view("newContact");
    }

    public function addPost(Request $request)
    {
        //var_dump($request->input("name"));die();
        $contact = new \App\Contact();
        $contact->name=$request->input("name");
        $contact->surname=$request->input("surname");
        $contact->phone=$request->input("phone");
        $contact->mail=$request->input("mail");
        $contact->birth=$request->input("birth");
        $contact->save();
    }

    public function editPost(Request $request)
    {
        $inputId = $request->input("id");
        $contact = \App\Contact::find($inputId);
        $contact->name=$request->input("name");
        $contact->surname=$request->input("surname");
        $contact->phone=$request->input("phone");
        $contact->mail=$request->input("mail");
        $contact->birth=$request->input("birth");
        $contact->save();
    }


}
