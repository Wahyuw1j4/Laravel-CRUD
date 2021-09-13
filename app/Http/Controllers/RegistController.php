<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistController extends Controller
{
    public function index(){
        return view('regist');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'username' => 'required|max:255',
            'email' => 'required|max:255|email',
            'password' => 'required|min:5|max:255|required_with:conpassword|same:conpassword',
            'conpassword' => 'min:5',
        ]);
        $validateData['password'] = bcrypt($validateData['password']);
        User::create($validateData);
        return redirect('/login')->with('success', 'Registrasi berhasil, silahkan login');
    }

}
