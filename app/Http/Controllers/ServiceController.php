<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create(){
        $contacts = Contact::all();
        return view('pages.new_service', compact('contacts'));
    }

    public function store(Request $req){
        $service = new Service();
        $service->Service_name = $req->service_name;
        $service->Service_type = $req->service_type;
        $service->Service_detail = $req->service_detail;
        if ($req->hasFile('service_img')){
            $image = time() .'.'.$req -> service_img->extension();
            $req->service_img->move(public_path('uploads/services/'),$image);
            $service->Service_image = $image;
        }
        $service->save();
        return redirect()->back();
    }

    public function show(){
        $services = Service::all();
        $contacts = Contact::all();
        return view('pages.all_services',compact('services','contacts'));
    }

    public function destroy(Request $req){
        $service = Service::find($req->id);
        $service->delete();
        return redirect()->back();
    }

    public function edit($id){
        $service = Service::find($id);
        $services = Service::all();
        $contacts = Contact::all();
        return view('pages.edit_service', compact('service','services','contacts'));
    }

    public function update(Request $req){
        $service = Service::find($req->id);
        $service->Service_name = $req->service_name;
        $service->Service_type = $req->service_type;
        $service->Service_detail = $req->service_detail;
        if ($req->hasFile('service_img')){
            $image = time() .'.'.$req -> service_img->extension();
            $req->service_img->move(public_path('uploads/services/'),$image);
            $service->Service_image = $image;
        }
        $service->update();
        return redirect()->back();
    }
}
