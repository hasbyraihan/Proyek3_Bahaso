<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\skill;

class SkillController extends Controller
{
    // Fungsi untuk menampilkan form penambahan
    public function create()
    {
        return view('skill');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'namaskill' => 'required',
            'level' => 'required',
        ], 
        [
            'namaskill.required' => 'Nama Perusahaan harus diisi.',
            'level.required' => 'Jabatan harus diisi.',
        ]);
    
        // Jika validasi berhasil, simpan data ke database
        skill::create($request->all());
    
        // Redirect ke halaman lain atau kembali ke form dengan pesan sukses
        return redirect()->route('portofolio.create')->with('success', 'Data berhasil ditambah');
    }
    
}