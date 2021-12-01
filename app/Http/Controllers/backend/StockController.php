<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function categoryList(){
        $categories = Category::all();
        // dd($categories);
        return view('backend.pages.stock.stock',compact('categories'));
    }

    public function categoryDetails($id){
        // dd($id);
        $products = Product::where('category_id',$id)->get();
        // dd($products);
        return view('backend.pages.stock.stock-details',compact('products'));
    }
}
