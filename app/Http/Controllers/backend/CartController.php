<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(){
        return view('frontend.cart.cart');
    }

    public function  addToCart($id){
        // dd($id);
        $product = Product::find($id);

        if ($product) {
            if ($product->quantity <= 0) {
                 return redirect()->back();
            }
            else{
                $cart = session()->has('cart') ? session()->get('cart') : [];

                if (array_key_exists($product->id,$cart)) {
                    $cart[$product->id]['quantity'];
                    $cart[$product->id]['total_price'] = ((int)$cart[$product->id]['quantity'] * (float)$cart[$product->id]['price']);
                }
                else{
                    $cart[$product->id] = [
                        'image'=>$product->image,
                        'product_id'=>$product->id,
                        'name'=>$product->name,
                        'quantity'=>1,
                        'price'=>$product->price,
                        'total_price'=>((float)$product->price),
                    ];
                }
                session(['cart'=>$cart]);

                // dd(session()->get('cart'));
                return redirect()->route('product.cart');
            }
        }

    }

    public function cartUpdate(Request $request){
        // dd($request->all());
        $id= $request->input('cart_id');
        $cart=session()->get('cart');
        // $product_quantity = Product::where('id',$cart[$id])->get();
        // dd($product_quantity);

        $cart[$id]['quantity'] = $request->input('quantity');
        // dd($cart[$id]['quantity']);
        $cart[$id]['total_price'] = $cart[$id]['quantity'] * $cart[$id]['price'];
        // dd($cart);
        session()->put('cart', $cart);
        return redirect()->route('product.cart');
    }

    public function cartDestroy(){
        session()->forget('cart');
        return redirect()->route('product.cart');
    }
}
