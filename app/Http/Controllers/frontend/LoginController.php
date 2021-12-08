<?php
namespace App\Http\Controllers\frontend;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Mail\VerificationEmail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function login(){
        return view('frontend.user.login');
    }

    public function loginPost(Request $request){

    }

    public function registration(){
        return view('frontend.user.registration');
    }

    public function registrationPost(Request $request){
        // dd($request->all());

        // $request->validate([
        //     'image'=>'required|mimes:png,jpg,jpge,svg|max:4096',
        //     'name'=>'required',
        //     'address'=>'required',
        //     'phone'=>'required',
        //     'email'=>'required',
        //     'password'=>'required',
        // ]);

        $user=User::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'phone_no'=>$request->phone,
            'email'=>$request->email,
            'password'=>bcrypt( $request->password),
            'email_verification_token'=>str::random(30),
        ]);
        Mail::to($user->email)->queue(new VerificationEmail($user));

        return redirect()->route('user.login');
    }

    public function activate($token){
        if ($token == null) {
            return redirect()->route('user.login');
        }

        $user = User::where('email_verification_token',$token)->first();
        if ($user == null) {
            return redirect()->route('user.login');
        }
        $user->update([
            'email_verifier'=>1,
            'email_verified_at'=>Carbon::now(),
        ]);

        return "Activated";
    }
}
