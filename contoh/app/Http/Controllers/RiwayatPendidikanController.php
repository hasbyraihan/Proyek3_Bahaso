<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
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
        $idUser = Auth::id();
        $data = RiwayatPendidikan::where('id_user', $idUser)->get();
        // dd($data);
        return view('dataPendidikan', compact('data'))->with('i',(request()->input('page',1)-1));
    }

    public function tampilpendidikan($id){

        $data = RiwayatPendidikan::where('id', $id)->first();
        return view('riwayatpendidikan', compact('data'));
    }

    public function updatependidikan(Request $request, $id){
        $idUser = Auth::id();
        $data = RiwayatPendidikan::where('id_user', $idUser)->find($id);
    
        if ($data) {
            $data->update($request->all());
        }
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
        // dd($idUser);
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
        $idUser = Auth::id();
        RiwayatPendidikan::create([
            'id_user' => $idUser,
            'sekolah' => $request->input('sekolah'),
            'jurusan' => $request->input('jurusan'),
            'tahun_lulus' => $request->input('tahun_lulus'),
        ]);
    
        // dd($idUser);
        // Redirect ke halaman lain atau kembali ke form dengan pesan sukses
        return redirect()->route('pendidikan')->with('success', 'Data berhasil ditambah');
    }
    
}
