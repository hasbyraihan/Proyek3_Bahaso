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
    
    public function index(){
        $data = RiwayatPendidikan::all();
        return view('dataPendidikan', compact('data'))->with('i',(request()->input('page',1)-1));
    }

    public function selectId(){
        return view('riwayatpendidikan.selectId');
    }

    public function tampilpendidikan($id){

        $data = RiwayatPendidikan::find($id);
        return view('riwayatpendidikan', compact('data'));
    }

    public function editpendidikan(Request $request, $id){
        $data = RiwayatPendidikan::find($id);
        $data->update($request->all());

        return redirect()->route('pendidikan')->with('success', 'Data berhasil di update');
    }

    // public function deletependidikan($id){
    //     RiwayatPendidikan::where('id',$id)->delete();
    //     alert('Hapus Data','Data Berhasil Dihapus', 'success');
    //     return redirect()->route('pendidikan');
    // }

    public function deletependidikan($id)
    {
        $data = RiwayatPendidikan::find($id);
        $data->delete();
        return redirect()->route('pendidikan');
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
        return redirect()->route('pendidikan')->with('success', 'Data berhasil ditambah');
    }
    
}
