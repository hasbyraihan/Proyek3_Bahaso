<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    function store_users(Request $request){
        $validateData = $request->validate([
            'email' => 'required|unique:users|max:25',
            'password' => 'required|min:8',
            'nama_users' => 'required|max:35',
            'level' => 'required'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create([
            'email' => $validateData['email'],
            'password' => $validateData['password'],
            'nama_users' => $validateData['nama_users'],
            'level' => 'Pengguna'
        ]);
        alert('Berhasil','Akun Berhasil Didaftarkan, Silahkan Login', 'success');
        return redirect('/login_aja');
    }
}