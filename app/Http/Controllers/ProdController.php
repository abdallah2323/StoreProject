<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Product;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Member;
use App\Models\team;
use App\Models\Service;
use Illuminate\Http\Request;

class ProdController extends Controller
{
    public function dash(){
        $contacts = Contact::all();
        $teams = Team::count();
        $members = Member::count();
        $categs = Category::count();
        $products = Product::count();
        return view('pages.dashboard', compact('contacts','teams','categs','products','members'));
    }

    public function create(){
        $categs = Category::all();
        $contacts = Contact::all();
        return view('pages.new',compact('categs','contacts'));
    }

    public function store(Request $req){
        $product = new Product();
        $product->Name = $req->product_name;
        $product->Description = $req->product_desc;
        $product->Category = $req->product_category;
        $product->Type = $req->product_type;
        $product->Price = $req->product_price;
        $product->Quantity = $req->product_qty;
        if ($req->product_img){
            $image = time() .'.'.$req -> product_img->extension();
            $req->product_img->move(public_path('uploads/products/'),$image);
            $product->Image = $image;
        }
        $product->save();
        return redirect()->back();
    }

    public function index(){
        $products = Product::all();
        $contacts = Contact::all();
        return view('pages.all', compact('products','contacts'));
    }

    public function destroy(Request $req){
        $product = Product::find($req->id);
        $product->delete();
        return redirect()->back();
    }

    public function edit($id){
        $product = Product::find($id);
        $products = Product::all();
        $contacts = Contact::all();
        return view('pages.edit', compact('product','products','contacts'));
    }

    public function update(Request $req){
        $product = Product::find($req->id);
        $product->Name = $req->product_name;
        $product->Description = $req->product_desc;
        $product->Category = $req->product_category;
        $product->Type = $req->product_type;
        $product->Price = $req->product_price;
        $product->Quantity = $req->product_qty;
        if ($req->hasFile('product_img')){
            $image = time() .'.'.$req -> product_img->getClientOriginalExtenstion();
            $req->product_img->move(public_path('uploads/products/'),$image);
            $product->Image = $image;
        }
        $product->update();
        return redirect("/products");
    }

    public function temp(){
        $products = Product::all();
        $members = Member::all();
        $categs = Category::all();
        $abouts = About::all();
        $services = Service::all();
        return view('store.index', compact('products','categs','abouts','members','services'));
    }

    public function about(){
        $abouts = About::all();
        $members = Member::all();
        $categs = Category::all();
        return view('store.about', compact('abouts','members','categs'));
    }

    public function contact(){
        $abouts = About::all();
        $categs = Category::all();
        return view('store.contact', compact('abouts','categs'));
    }

    public function products(){
        $products = Product::paginate(3);
        $categs = Category::all();
        $abouts = About::all();
        return view('store.products', compact('products','abouts','categs'));
    }

    public function single_product($id){
        $product = Product::find($id);
        $abouts = About::all();
        $categs = Category::all();
        return view('store.single-product', compact('product','abouts','categs'));
    }
}
