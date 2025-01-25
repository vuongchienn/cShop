<?php

namespace App\Http\Controllers\customer;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function login(){
        return view("customer.login");
    }

    public function checkLogin(Request $request){
        $credentials = [
            "email"=> $request->email,
            "password"=> $request->password,
            "role"=>2
        ];

        $remember = $request->remember;

        if(Auth::attempt($credentials, $remember)){
            return redirect()->intended("");
        }
        else {
            return back()->with('error','EMAIL or PASSWORD is incorect !');
        }
    }

    public function logout(){
        Auth::logout();
        return back();
    }

    public function registerView(){
        return view('customer.register');
    }

    public function register(Request $request){
        $validated = $request->validate([
            'email'=> 'required|email',
            'password'=> 'required',
            'name' =>'required|alpha',
            "con-password"=>"required"
        ]);

        if($validated['password']!=$validated['con-password']){
            return back()->with('error','Confirm password does not match');
        }
        $user = User::create([
            'email'=> $validated['email'],
            'name'=> $validated['name'],
            'password'=> bcrypt($validated['password']),
            'avatar'=>'safsd',
            'role'=> 2,
        ]);

        return redirect()->route('login')->with('success','Register successfully ! Please login now');

    }
}
