<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SignUpController extends Controller
{
    function logged_in(){
        if(session()->has('user')){
            return redirect('home');
        } else{
            return view('signup', ['title'=>'Sign Up', 'css'=>'signup']);
        }
    }

    function addData(Request $req){

        $req->validate([
            'password'=> 'required | min:8',
            'first_name'=> 'required',
            'last_name'=> 'required',
            'email'=> 'required | email | unique:users,email',
            'address'=> 'required',
            'phone'=> 'required | numeric',
            'birth_date'=> 'required'
        ]);


        $user = new User;
        $user->first_name = $req->first_name;
        $user->last_name = $req->last_name;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->birth_date = $req->birth_date;
        $user->address = $req->address;
        $user->password = Hash::make($req->password);
        $user->role = 'user';
        $query = $user->save();

        if($query){
            return back()->with('success', "You have been successfuly registered!");
        } else{
            return back()->with('fault', "Registration failed!");
        }
    }
}
