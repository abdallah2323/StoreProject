<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProdController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'admin'])->name('home');

Route::get('/home', [ProdController::class, 'dash'])->name('dash.show');

Route::get('/users', [UserController::class, 'show'])->name('users.show');

Route::delete('/user/delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');
Route::get('/user/delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit'); 
Route::post('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');

Route::get('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');

Route::get('/product/create', [ProdController::class, 'create'])->name('product.create');

Route::post('/product/store', [ProdController::class, 'store'])->name('product.store');

Route::get('/products', [ProdController::class, 'index'])->name('products.index');

Route::delete('/product/delete/{id}', [ProdController::class, 'destroy'])->name('product.destroy');
Route::get('/product/delete/{id}', [ProdController::class, 'destroy'])->name('product.destroy');

Route::get('/product/edit/{id}', [ProdController::class, 'edit'])->name('products.edit'); 
Route::post('/product/edit/{id}', [ProdController::class, 'edit'])->name('products.edit');

Route::get('/product/update/{id}', [ProdController::class, 'update'])->name('product.update');
Route::put('/product/update/{id}', [ProdController::class, 'update'])->name('product.update');

Route::get('/store', [ProdController::class, 'temp'])->name('index.temp');
Route::get('/about', [ProdController::class, 'about'])->name('index.about');
Route::get('/items', [ProdController::class, 'products'])->name('index.items');
Route::get('/contact', [ProdController::class, 'contact'])->name('index.contact');
Route::get('/single/{id}', [ProdController::class, 'single_product'])->name('index.single');

Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/create', [CategoryController::class, 'store'])->name('category.store');

Route::get('/categories', [CategoryController::class, 'show'])->name('categories.show');

Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit'); 

Route::get('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');

Route::get('/category/show/{id}', [CategoryController::class, 'cshow'])->name('category.show');

Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

Route::get('/contacts', [ContactController::class, 'show'])->name('contact.show');

Route::get('/contact/{id}', [ContactController::class, 'single'])->name('contact.single');

Route::get('/about/create', [AboutController::class, 'create'])->name('about.create');
Route::post('/about/store', [AboutController::class, 'store'])->name('about.store');

Route::get('/abouts', [AboutController::class, 'show'])->name('about.show');

Route::get('/about/edit/{id}', [AboutController::class, 'edit'])->name('about.edit'); 

Route::get('/about/update/{id}', [AboutController::class, 'update'])->name('about.update');
Route::put('/about/update/{id}', [AboutController::class, 'update'])->name('about.update');

Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');
Route::post('/team/store', [TeamController::class, 'tstore'])->name('team.store');
Route::post('/member/store', [TeamController::class, 'mstore'])->name('member.store');

Route::get('/members', [TeamController::class, 'mshow'])->name('member.show');
Route::get('/teams', [TeamController::class, 'tshow'])->name('team.show');

Route::delete('/member/delete/{id}', [TeamController::class, 'destroy'])->name('team.destroy');
Route::get('/member/delete/{id}', [TeamController::class, 'destroy'])->name('team.destroy');

Route::get('/member/edit/{id}', [TeamController::class, 'medit'])->name('member.edit');
Route::get('/team/edit/{id}', [TeamController::class, 'tedit'])->name('team.edit');  

Route::get('/member/update/{id}', [TeamController::class, 'mupdate'])->name('member.update');
Route::put('/member/update/{id}', [TeamController::class, 'mupdate'])->name('member.update');

Route::get('/team/update/{id}', [TeamController::class, 'tupdate'])->name('team.update');
Route::put('/team/update/{id}', [TeamController::class, 'tupdate'])->name('team.update');

Route::get('/team/show/{id}', [TeamController::class, 'team_show'])->name('team.edit');  

Route::get('service/create', [ServiceController::class, 'create'])->name('service.create');
Route::post('service/create', [ServiceController::class, 'store'])->name('service.create');

Route::get('/services', [ServiceController::class, 'show'])->name('services.show');

Route::delete('/service/delete/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');
Route::get('/service/delete/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');

Route::get('/service/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');

Route::get('/service/update/{id}', [ServiceController::class, 'update'])->name('service.update');
Route::put('/service/update/{id}', [ServiceController::class, 'update'])->name('service.update');
