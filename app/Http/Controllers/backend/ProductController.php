<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productlist(){
        $category=Category::where('status','active')->get();
        $products= Product::withTrashed()->get();
        // dd($products);
        return view('backend.pages.productlist', compact('category','products'));
    }

    public function addproduct(Request $request){
        // dd($request->all());
        // dd(date('Ymdhms'));
        $filename='';
        if($request->hasFile('image')){
            $file = $request->file('image');

            $filename = date('ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename); 
        }

        Product::create([
            'name'=>$request->name,
            'category'=>$request->category,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'image'=>$filename,
            'description'=>$request->description,
        ]);
        return redirect()->back();
    }

    public function delete($id){
        // dd($id);
        $product= Product::find($id);
        if ($product) {
            $product->delete();
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function restore($id){
        // dd($id);
        $product = Product::withTrashed()->find($id);
        if ($product) {
            $product->restore();
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function edit($id){
        // dd($id);
        $product = Product::find($id);
        if ($product) {
            return view('backend.pages.product.product-edit',compact('product'));
        }
    }

    // public function update($id){
    //     dd($id);
    //     $product = Product::find($id);
    //     // if ($product) {
            
    //     // }
    // }
    
}
