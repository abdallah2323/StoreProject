<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function create(){
        $contacts = Contact::all();
        return view('pages.about',compact('contacts'));
    }

    public function store(Request $req){
        $about = new About();
        $about->Address = $req->address;
        $about->Description = $req->description;
        $about->Quote = $req->quote;
        $about->Gmail = $req->gmail;
        $about->Whatsapp = $req->whatsapp;
        $about->Facebook = $req->facebook;
        $about->Twitter = $req->twitter;
        $about->Instagram = $req->instagram;
        $about->Linkedin = $req->linkedin;

        $about->save();
        return redirect()->back();
    }

    public function show(){
        $abouts = About::all();
        $contacts = Contact::all();
        return view('pages.all_about', compact('abouts','contacts'));
    }

    public function edit($id){
        $about = About::find($id);
        $abouts = About::all();
        $contacts = Contact::all();
        return view('pages.edit_about', compact('about','abouts','contacts'));
    }

    public function update(Request $req){

        $about = About::find($req->id);
        $about->Address = $req->address;
        $about->Description = $req->description;
        $about->Quote = $req->quote;
        $about->Gmail = $req->gmail;
        $about->Whatsapp = $req->whatsapp;
        $about->Facebook = $req->facebook;
        $about->Twitter = $req->twitter;
        $about->Instagram = $req->instagram;
        $about->Linkedin = $req->linkedin;

        $about->update();
        return redirect()->back();
    }
}
