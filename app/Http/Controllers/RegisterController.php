<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(){

        $attributes = request()->validate([
            'name' => 'required|max:100|min:3',
            'username' => 'required|max:100|min:3|unique:users,username',
            'email' => 'required|max:100|min:3|email|unique:users,email',
            'password' => 'required|max:50|min:7'
        ]);

        $user = User::create($attributes);

        Auth::login($user);



        return redirect('/')->with('success', 'Your account has been created!');
    }
}
