<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('layouts.admin',compact('contacts'));
    }

    public function admin()
    {
        $contacts = Contact::all();
        $admin = Auth::user()->admin;
        if($admin ==1){
            return view('layouts.admin', compact('contacts'));
        }else{
            return view('store.index');
        }
    }
}
