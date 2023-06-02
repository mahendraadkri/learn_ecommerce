<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/',[PagesController::class,'home'])->name('home');

Route::get('/viewproduct/{product}',[PagesController::class,'viewproduct'])->name('viewproduct');

Route::get('/userlogin',[PagesController::class,'userlogin'])->name('userlogin');

Route::get('/userregister',[UserController::class,'userregister'])->name('user.register');

Route::post('/userregister',[UserController::class,'userstore'])->name('user.register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','isadmin'])->name('dashboard');

Route::middleware(['auth'])->group(function(){
    Route::get('/mycart',[CartController::class,'index'])->name('cart.index');
    Route::post('/mycart/store',[CartController::class,'store'])->name('cart.store');
});





Route::middleware(['auth','isadmin'])->group(function () {
    //route of category
    Route::get('/category',[CategoryController::class,'index'])-> name('category.index');
    Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('/category/{id}/edit',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('/category/{id}/update',[CategoryController::class,'update'])->name('category.update');
    Route::get('/category/{id}/destroy',[CategoryController::class,'destroy'])->name('category.destroy');


    //notice
    Route::get('/notice',[NoticeController::class,'index'])->name('notice.index');
    Route::get('/notice/create',[NoticeController::class,'create'])->name('notice.create');
    Route::post('/notice/store',[NoticeController::class,'store'])->name('notice.store');
    Route::get('/notice/{id}/edit',[NoticeController::class,'edit'])->name('notice.edit');
    Route::post('/notice/{id}/update',[NoticeController::class,'update'])->name('notice.update');
    Route::get('/notice/{id}/destroy',[NoticeController::class,'destroy'])->name('notice.destroy');

    //gallery
    Route::get('/gallery',[GalleryController::class,'index'])->name('gallery.index');
    Route::get('/gallery/create',[GalleryController::class,'create'])->name('gallery.create');
    Route::post('/gallery/store',[GalleryController::class,'store'])->name('gallery.store');
    Route::get('/gallery/{id}/edit',[GalleryController::class,'edit'])->name('gallery.edit');
    Route::post('/gallery/{id}/update',[GalleryController::class,'update'])->name('gallery.update');
    Route::get('/gallery/{id}/destroy',[GalleryController::class,'destroy'])->name('gallery.destroy');

    //product
    Route::middleware('isadmin')->group(function(){
    Route::get('/product',[ProductController::class,'index'])->name('product.index');
    Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
    Route::post('/product/store',[ProductController::class,'store'])->name('product.store');
    Route::get('/product/{id}/edit',[ProductController::class,'edit'])->name('product.edit');
    Route::post('/product/{id}/update',[ProductController::class,'update'])->name('product.update');
    Route::get('/product/{id}/destroy',[ProductController::class,'destroy'])->name('product.destroy');
});




    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
