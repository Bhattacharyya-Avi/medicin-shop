<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categorylist(){
        $categories= Category::where('status', 'active')->get();
        
        return view('backend.pages.categoryList',compact('categories'));
    }

    public function add(Request $request){
        
        // dd($request->all());

        Category::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'status'=>$request->status
        ]);
        return redirect()->back();

    }
}
