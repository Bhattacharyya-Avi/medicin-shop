<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('frontend.login.login');
    }

    public function loginPost(Request $request)
    {
        $userpost = $request->except('_token');
        if (Auth::attempt($userpost)) {
            return redirect()->route('home');
        }
        else
        return redirect()->back()->with('batch','email or password not matched');

    }

    public function registration()
    {
        return view('frontend.login.registration');
    }
    public function registrationPost(Request $request)
    {
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>bcrypt( $request->password),
        ]);
        return redirect()->back();
    }

    public function logout()
    {
        session()->forget('cart');
        Auth::logout();
        return redirect()->back();
    }
}
