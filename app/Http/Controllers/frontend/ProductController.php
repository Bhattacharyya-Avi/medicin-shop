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
        if($product){
            return view('frontend.pages.product.single-product', compact('product'));
        }
    }
}
