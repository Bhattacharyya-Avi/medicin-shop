<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productlist(){
        $category=Category::where('status','active')->get();
        return view('backend.pages.productlist', compact('category'));
    }

    
}
