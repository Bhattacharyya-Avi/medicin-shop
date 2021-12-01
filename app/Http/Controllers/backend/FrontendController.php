<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function form(){
        $sliders = Slider::all();
        return view('backend.pages.slider.slider-content',compact('sliders'));
    }

    public function contentsAdd(Request $request){
        // dd($request->all());

        $filename = '';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/slider',$filename);
        }
        Slider::create([
            'image'=>$filename,
            'details'=>$request->details,
        ]);
        return redirect()->back();
    }
}
