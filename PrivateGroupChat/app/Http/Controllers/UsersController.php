<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use Illuminate\Validation\ValidationException;

class UsersController extends Controller
{

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $remember = $request->boolean('remember');

        if(Auth::attempt($credentials, $remember)){
            $request->session()->regenerate();

            return redirect()->intended('home');
        }

        throw ValidationException::withMessages([
            'email' => trans('auth.failed'),
        ]);

    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
