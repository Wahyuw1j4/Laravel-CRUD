<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }

    public function store(Request $request){
        $loginvalidate = $request -> validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($loginvalidate)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginerror', 'Username atau password ada salah');
        
    }

        public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
