<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request){
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        $credentials = $request->only('email', 'password');
        
        if(Auth::attempt($credentials)){
            $user = Auth::user();

            if ($user->level == 'Pengguna'){
                return redirect()->intended('/dashboard');
            }
        }
        return back()->withError([
            'password' => 'Username atau Password Salah',
        ])->onlyInput('password');
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
