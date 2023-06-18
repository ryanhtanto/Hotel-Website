<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class ProfileController extends Controller
{
    function index(){
        return view('user_profile');
    }

    function edit_profile(){
        $user = User::find(session('user')->id_user);
    }
}
