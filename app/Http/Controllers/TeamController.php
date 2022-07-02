<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Member;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function create(){
        $contacts = Contact::all();
        $teams = Team::all();
        return view('pages.new_team', compact('contacts','teams'));
    }

    public function tstore(Request $req){
        $team = new Team();
        $team->team_name = $req->team_name;
        $team->team_category = $req->team_category; 
        $team->members_number = $req->team_number; 
        $team->team_detail = $req->team_detail;
        $team->save();
        return redirect()->back();         
    }

    public function mstore(Request $req){
        $member = new Member();
        $member->member_name = $req->member_name;
        $member->member_old = $req->member_old;
        $member->member_gender = $req->member_gender;
        $member->team_name = $req->member_team;
        $member->member_phone = $req->member_phone;
        $member->member_detail = $req->member_detail;
        if ($req->hasFile('member_img')){
            $image = time() .'.'.$req -> member_img->extension();
            $req->member_img->move(public_path('uploads/members/'),$image);
            $member->member_image = $image;
        }
        $member->member_facebook = $req->member_facebook;
        $member->member_twitter = $req->member_twitter;
        $member->member_instagram = $req->member_instagram;
        $member->save();
        return redirect()->back();         
    }

    public function tshow(){
        $teams = Team::all();
        $contacts = Contact::all();
        return view('pages.all_teams', compact('teams','contacts'));
    }

    public function mshow(){
        $members = Member::all();
        $contacts = Contact::all();
        return view('pages.all_members', compact('members','contacts'));
    }

    public function destroy(Request $req){
        $member = Member::find($req->id);
        $member->delete();
        return redirect()->back();
    }

    public function medit($id){
        $member = Member::find($id);
        $members = Member::all();
        $teams = Team::all();
        $contacts = Contact::all();
        return view('pages.edit_member', compact('member','members','contacts','teams'));
    }

    public function tedit($id){
        $team = Team::find($id);
        $teams = Team::all();
        $contacts = Contact::all();
        return view('pages.edit_team', compact('team','contacts','teams'));
    }

    public function mupdate(Request $req){
        $member = Member::find($req->id);
        $member->member_name = $req->member_name;
        $member->member_old = $req->member_old;
        $member->member_gender = $req->member_gender;
        $member->team_name = $req->member_team;
        $member->member_phone = $req->member_phone;
        $member->member_detail = $req->member_detail;
        if ($req->hasFile('member_img')){
            $image = time() .'.'.$req -> member_img->extension();
            $req->member_img->move(public_path('uploads/members/'),$image);
            $member->member_image = $image;
        }
        $member->member_facebook = $req->member_facebook;
        $member->member_twitter = $req->member_twitter;
        $member->member_instagram = $req->member_instagram;
        $member->update();
        return redirect('/members');
    }

    public function tupdate(Request $req){
        $team = Team::find($req->id);
        $team->team_name = $req->team_name;
        $team->team_category = $req->team_category;
        $team->members_number = $req->team_number;  
        $team->team_detail = $req->team_detail;
        $team->update();
        return redirect()->back();         
    }

    public function team_show($id){
        $team = Team::find($id);
        $members = Member::all();
        $contacts = Contact::all();
        return view('pages.show_team', compact('team','contacts','members'));
    }

}
