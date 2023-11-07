<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatPendidikan;

class RiwayatPendidikanController extends Controller
{
    // Fungsi untuk menampilkan form penambahan
    public function create()
    {
        return view('riwayatpendidikan');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'sekolah' => 'required',
            'jurusan' => 'required',
            'tahun_lulus' => 'required|numeric',
        ], [
            'sekolah.required' => 'Nama Sekolah harus diisi.',
            'jurusan.required' => 'Jurusan harus diisi.',
            'tahun_lulus.required' => 'Tahun Lulus harus diisi.',
            'tahun_lulus.numeric' => 'Tahun Lulus harus berupa angka.',
        ]);
    
        // Jika validasi berhasil, simpan data ke database
        RiwayatPendidikan::create($request->all());
    
        // Redirect ke halaman lain atau kembali ke form dengan pesan sukses
        return redirect()->route('riwayat-pekerjaan')->with('success', 'Data berhasil ditambah');
    }
    
}
