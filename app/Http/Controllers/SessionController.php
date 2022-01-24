<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller {
    public function create() {
        return view('sessions.create');
    }


    public function store() {

        $attributes = request()->validate([
            'email' => "required|email",
            'password' => "required"
        ]);

        if (!auth()->attempt($attributes)) {
           throw ValidationException::withMessages([
                'email' => 'The provided credentials could not be verified.',
            ]);
        }
        

        session()->regenerate();

        return redirect('/')->with('success', 'Welcome back!');
    }

    public function destroy() {
        Auth::logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
