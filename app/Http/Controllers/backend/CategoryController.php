<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categorylist(){
        $categories= Category::withTrashed()->get();
        
        return view('backend.pages.categoryList',compact('categories'));
    }

    public function add(Request $request){
        
        // dd($request->all());

        Category::create([
            'name'=>$request->name,
            'description'=>$request->description,
            // 'status'=>$request->status
        ]);
        return redirect()->back();

    }

    public function delete($id){
        $category = Category::find($id);
        if($category){
            $category->delete();
            return redirect()->back();
        }
        return redirect()->back();

    }

    public function restore($id){
        // dd($id);
        $category = Category::withTrashed()->find($id);
        // dd($category);
        if($category){
            $category->restore();
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function edit($id){
        // dd($id);
        $category = Category::find($id);
        if($category){
            return view('backend.pages.category.edit-category',compact('category'));
        }

        return redirect()->back();

    }

    public function update(Request $request,$id){
        // dd($request->all());
        $category = Category::find($id);
        if($category){
            $category -> update([
                'name'=>$request->name,
                'description'=>$request->description,
                'status'=>$request->status
            ]);
            return redirect()->route('admin.category.list');
        }
    }

    
}
