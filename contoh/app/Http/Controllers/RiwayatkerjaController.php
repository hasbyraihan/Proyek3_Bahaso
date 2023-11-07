<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\riwayatkerja;

class RiwayatkerjaController extends Controller
{
    // Fungsi untuk menampilkan form penambahan
    public function create()
    {
        return view('riwayatpekerjaan');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'perusahaan' => 'required',
            'jabatan' => 'required',
            'bulan_mbekerja' => 'required',
            'tahun_mbekerja' => 'required|numeric',
            'bulan_sbekerja' => 'required',
            'tahun_sbekerja' => 'required|numeric',            
        ], 
        [
            'perusahaan.required' => 'Nama Perusahaan harus diisi.',
            'jabatan.required' => 'Jabatan harus diisi.',
            'bulan_mbekerja.required' => 'Bulan Mulai Bekerja harus diisi.',
            'tahun_mbekerja.numeric' => 'Tahun Mulai Bekerja harus berupa angka.',
            'bulan_sbekerja.required' => 'Bulan Selesai Bekerja harus diisi.',
            'tahun_sbekerja.numeric' => 'Tahun Selesai Bekerja harus berupa angka.',
        ]);
    
        // Jika validasi berhasil, simpan data ke database
        riwayatkerja::create($request->all());
    
        // Redirect ke halaman lain atau kembali ke form dengan pesan sukses
        return redirect()->route('skill')->with('success', 'Data berhasil ditambah');
    }
    
}
