<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    public function view_product(){
        return view('backend.pages.product.single-product');
    }
}
