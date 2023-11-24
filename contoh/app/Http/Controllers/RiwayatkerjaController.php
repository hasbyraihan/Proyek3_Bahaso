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

    public function index(){
        $data = riwayatkerja::all();
        return view('dataPekerjaan', compact('data'))->with('i',(request()->input('page',1)-1));
    }

    public function selectId(){
        // $data = Unemployed::all();
        return view('riwayatpekerjaan.selectId');
    }

    public function tampilkerja($id){

        $data = riwayatkerja::find($id);
        return view('riwayatpekerjaan', compact('data'));
    }

    public function editkerja(Request $request, $id){
        $data = riwayatkerja::find($id);
        $data->update($request->all());

        return redirect()->route('pekerjaan')->with('success', 'Data berhasil di update');
    }

    public function deletekerja($id){
        riwayatkerja::where('id',$id)->delete();
        alert('Hapus Data','Data Berhasil Dihapus', 'success');
        return redirect()->route('pekerjaan');
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
        return redirect()->route('pekerjaan')->with('success', 'Data berhasil ditambah');
    }
    
}
