<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function master(){
        return view('frontend.master');
    }

    public function login(){
        return view('backend.pages.login.login');
    }

    public function loginPost(Request $request){
        dd($request->all());
    }
}
