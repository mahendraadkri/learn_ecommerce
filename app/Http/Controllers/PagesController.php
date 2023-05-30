<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
public function home()
{
    $products = Product::all();
    return view('welcome',compact('products'));
}
    public function about(){
        return view('about');
    }

}
