<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function dashboard(){
        return view('backend.pages.content');
    }
}
