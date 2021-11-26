<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    public function view_product(){
        return view('backend.pages.product.single-product');
    }

    public function singleProduct($id){
        // dd($id);
        $product = Product::find($id);
        // dd($product);
        return view('frontend.pages.product.single-product',compact('product'));
    }
}
