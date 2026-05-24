<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $prodcuts = Product::all();
        return view('User.Home.index',compact('products'));
    }
}
