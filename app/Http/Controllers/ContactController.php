<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create(){
        return view('store.contact');
    }

    public function store(Request $req){
        $contact = new Contact();
        $contact->name = $req->name;
        $contact->email = $req->email;
        $contact->message = $req->message;
        $contact->save();
        return redirect()->back();
    }

    public function single($id){
        $contacts = Contact::all();
        $contact = Contact::find($id);
        return view('pages.contact', compact('contact', 'contacts'));
    }

    public function show(){
        $contacts = Contact::all();
        return view('pages.messages', compact('contacts'));
    }
}
