<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    function logged_in(){
        if(session()->has('user')){
            if(session('user')->role == 'user'){
                return redirect('home');
            } else{
                return redirect('admin');
            }
        } else{
            return view('login', ['title'=>'Login', 'css'=>'login', 'sitekey' => '6LePvQgbAAAAABe-2RRgn76l0c2gPCzXEQijeabR']);
        }
    }

    function user_auth(Request $req){
        $req->validate([
            'email'=> 'required | email',
            'password'=>'required',
        ]);

        if(!$req->input('g-recaptcha-response')){
            return back()->with('captcha_error', "Please check the recaptcha!");
        }

        $data = [
            'email' => $req->input('email'),
            'password' => $req->input('password')
        ];

        $user = User::where('email', $data['email'])->first();

        Auth::attempt($data);

        if($user->role == 'admin'){
            $req->session()->put('user', $user);
            return redirect('admin');
        }
        
        if(Auth::check()){
            Auth::login($user);
            $req->session()->put('user', $user);
            return redirect('home');
        } else{
            return back()->with('fault', "Please enter the right email and password combination!");
        }
    }
}
