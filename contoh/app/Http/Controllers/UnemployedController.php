<?php

namespace App\Http\Controllers;

use App\Models\Unemployed;
use App\Models\RiwayatPendidikan;
use App\Models\riwayatkerja;
use App\Models\Portofolio;
use Illuminate\Http\Request;


class UnemployedController extends Controller
{
    public function index(){
        $data = Unemployed::all();
        return view('datapengangguran', compact('data'))->with('i',(request()->input('page',1)-1));
    }
    public function tambahpengangguran(){
        return view('tambahpengangguran');
    } 

    public function insertdata(Request $request){
        $validatedData = $request->validate([ 
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $validatedData = $request->validate([ 
            'nama' => 'required|string|max:255'

        ]);
        $data = $request->all();
    
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('uploads/foto/'), $filename);
            $data['foto'] = $filename;
        }
    
        Unemployed::create($data);
        return redirect()->route('riwayat-pendidikan')->with('success', 'Data berhasil ditambah');
    }
    
    public function tampildata($id){

        $data = Unemployed::find($id);
        return view('tampilkandata', compact('data'));
    }
    public function editdata(Request $request, $id){
        $data = Unemployed::find($id);
        $data->update($request->all());

        return redirect()->route('pengangguran')->with('success', 'Data berhasil di update');
    }
    public function destroy($id){
        Unemployed::where('id',$id)->delete();
        alert('Hapus Data','Data Berhasil Dihapus', 'success');
        return redirect()->route('pengangguran');
    }

    function dashboard(){
        $pengangguran = Unemployed::paginate(5);
        $pendidikan = RiwayatPendidikan::all();
        $pekerjaan = riwayatkerja::all();
        $portofolio = Portofolio::all();

        return view('welcome',['pengangguran'=>$pengangguran, 'pendidikan'=>$pendidikan, 'pekerjaan'=>$pekerjaan, 'portofolio'=>$portofolio])
        ->with('i',(request()->input('page',1)-1));
    }
    
}

