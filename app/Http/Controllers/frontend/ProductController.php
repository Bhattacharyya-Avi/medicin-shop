<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function singleProduct($id)
    {
        $product = Product::find($id);
        $related = Product:: where('category_id',$id)->get();
        // dd($related);
        if($product){
            return view('frontend.pages.product.single-product', compact('product','related'));
        }
    }

    // public function addtocart(Request $request,$id){
    //     // dd($request->all());
    //     $product = Product::find($id);
    //     // dd($product);
    //     if ($product) {
    //         if ($product->quantity >= $request->quantity) {
                
    //         }
            
    //     }

    // }
}
