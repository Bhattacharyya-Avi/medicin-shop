<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function master(){
        $products = Product::get();
        return view('frontend.master2',compact('products'));
    }
    public function index(){
        $products = Product::get();
        // dd($products);
        return view('frontend.pages.index',compact('products'));
    }

    public function index2(){
        $products = Product::get();
        return view('frontend.pages.index',compact('products'));
    }
}
