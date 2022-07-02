<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(){
        $users = User::all();
        $contacts = Contact::all();
        return view('pages.all_users', compact('users','contacts'));
    }

    
    public function destroy(Request $req){
        $user = User::find($req->id);
        $user->delete();
        return redirect()->back();
    }

    public function edit($id){
        $user = User::find($id);
        $users = User::all();
        $contacts = Contact::all();
        return view('pages.edit_user', compact('user','users','contacts'));
    }

    public function update(Request $req){
        $user = User::find($req->id);
        $user->name = $req->user_name;
        $user->email = $req->user_email;
        $user->admin = $req->user_email;
        $user->update();
        return redirect("/users");
    }
}
