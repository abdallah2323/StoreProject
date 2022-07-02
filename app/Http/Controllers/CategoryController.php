<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        $contacts = Contact::all();
        return view('pages.new_category',compact('contacts'));
    }

    public function store(Request $req){
        $categ = new Category();
        $categ->Category_Name = $req->category_name;
        $categ->Category_Description = $req->category_description;
        if ($req->hasFile('category_img')){
            $image = time() .'.'.$req -> category_img->extension();
            $req->category_img->move(public_path('uploads/categories/'),$image);
            $categ->Category_Image = $image;
        }
        $categ->Product_Type = $req->product_type;
        $categ->save();
        return redirect()->back();
    }

    public function show(){
        $categs = Category::all();
        $contacts = Contact::all();
        return view('pages.all_categories', compact('categs','contacts'));
    }

    public function destroy(Request $req){
        $categ = Category::find($req->id);
        $categ->delete();
        return redirect()->back();
    }

    public function edit($id){
        $categ = Category::find($id);
        $categs = Category::all();
        $contacts = Contact::all();
        return view('pages.edit_category', compact('categ','categs','contacts'));
    }

    public function update(Request $req){
        $categ = Category::find($req->id);
        $categ->Category_Name = $req->category_name;
        $categ->Category_Description = $req->category_description;
        if ($req->hasFile('category_img')){
            $image = time() .'.'.$req -> category_img->extension();
            $req->category_img->move(public_path('uploads/categories/'),$image);
            $categ->Category_Image = $image;
        }
        $categ->Product_Type = $req->product_type;
        $categ->update();
        return redirect("/categories");
    }

    public function cshow($id){
        $categ = Category::find($id);
        $categs = Category::all();
        $products = Product::where('Category', $categ->Category_Name)->get();
        $abouts = About::all();
        
        return view('store.category', compact('categ','products','abouts','categs'));
    }
}
