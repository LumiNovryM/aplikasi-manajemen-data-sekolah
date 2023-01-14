<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    # Login Page
    public function login()
    {
        return view('login');
    }

    # Login Action 
    public function auth(Request $request)
    {
        # Validate
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        # Check Validate Generate Session
        if(Auth::attempt($credentials)){
            # Session Dibuat
            $request->session()->regenerate();

            # Kemudian Redirect Ke Home
            return redirect()->intended('/');
        }

        # Jika gagal maka session flash execute
        Session::flash('login-failed');
        Session::flash('message', 'Login Running With Error!');

        return redirect('/login');
    }

    public function logout(Request $request)
    {
        # Logout
        Auth::logout();
        
        # Set Invalidate
        $request->session()->invalidate();

        # Set Generate Token
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
