<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productlist(){
        $category=Category::where('status','active')->get();
        $companies = Company::where('status','1')->get();
        // dd($companies);
        $products= Product::withTrashed()-> with('category','company')->get();
        // dd($products);
        return view('backend.pages.productlist', compact('category','products','companies'));
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
            'category_id'=>$request->category,
            'company_id'=>$request->company,
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
        $category=Category::where('status','active')->get();
        $companies = Company::where('status','1')->get();
        $product = Product::find($id);
        if ($product) {
            return view('backend.pages.product.product-edit',compact('product','category','companies'));
        }
    }

    public function update(Request $request,$id){
        // dd($id);
        $product = Product::find($id);
        
        if ($product) {
            $product->update([
                'name'=>$request->name,
                'category_id'=>$request->category,
                'company_id'=>$request->company,
                'price'=>$request->price,
                'quantity'=>$request->quantity,
                // 'image'=>$request->
                'description'=>$request->description
            ]);

            return redirect()->route('admin.product.list');
        }
    }
    
}
