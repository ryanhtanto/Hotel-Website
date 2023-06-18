<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginSignupController extends Controller
{
    function index(){
        if(session()->has('users')){
            return redirect('home');
        } else{
            return view('login_signup');
        }
    }

    //sign up
    public function addUser(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required | unique:users,email',
            'password'=> 'required',
            'coPassword'=> 'required',
            'phoneNumber'=> 'required',
        ]);
        
        $user = new User();
        $user->name = $request->input('name');
        if($request->password == $request->coPassword){
            $user->password = Hash::make($request->password);
        }else{
            return back()->with('fault', "Password confirmation does not match");
        }
        $user->email = $request->input('email');
        $user->phoneNumber = $request->input('phoneNumber');
        $user->birthDate = $request->input('birthDate');
        $user->role = 'user';
        
        if(empty($request->file('images'))){
            $user->images = $filename;
        } else{
            $filename = $request->file('images')->getClientOriginalName();
            $user->images = $filename;
            $request->file('images')->move('images/Users', $filename);
        }
        
        
        $query = $user->save();

        if($query){
            return back()->with('success', "You have been successfuly registered!");
        } else{
            return back()->with('fault', "Registration failed!");
        }
    }

    //login
    function user_login(Request $request)
    {
        $request->validate([
            'email' => 'required | email',
            'password' => 'required',
        ]);

        if (!$request->input('g-recaptcha-response')) {
            return back()->with('captcha_error', "Please check the recaptcha!");
        }
        
        $dataUser = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        $user = User::where('email', $dataUser['email'])->first();
        Auth::attempt($dataUser);
        if(Auth::check()){
            Auth::login($user);
            $request->session()->put('user', $user);
            if($user->role == 'admin'){
                return redirect('admin_crud');
            }
            return redirect('home');
        }else{
            return back()->with('fault', "Invalid email and password combination!");
        }

        // $users = User::where('email', $data['email'])->first();
        // if ($users->role == 'admin') {
        //     $req->session()->put('user', $users);
        //     return redirect('admin');
        // }
        
    }
}
