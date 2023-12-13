<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\skill;
use App\Models\Unemployed;
use App\Models\RiwayatPendidikan;
use App\Models\riwayatkerja;
use App\Models\Portofolio;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;


class UnemployedController extends Controller
{
    public function index(){
        $data = Unemployed::all();
        return view('datapengangguran', compact('data'))->with('i',(request()->input('page',1)-1));
    }

    public function exportpdf(){
        $idUser = Auth::id();
        $dataUnemployed = Unemployed::where('id', $idUser)->get();
        $dataPendidikan = RiwayatPendidikan::where('id_user', $idUser)->get();
        $dataPekerjaan = Riwayatkerja::where('id_user', $idUser)->get();
        $dataSkill = skill::where('id_user', $idUser)->get();
    
        $pdf = PDF::loadView('data-pdf', [
            'dataUnemployed' => $dataUnemployed,
            'dataPendidikan' => $dataPendidikan,
            'dataPekerjaan' => $dataPekerjaan,
            'dataSkill' => $dataSkill,
        ]);
    
        return $pdf->download("coba.pdf");
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
        $existingRecord = Unemployed::find(1);

        if ($existingRecord) {
            $existingRecord->update($data);
        } else {
            Unemployed::create([
            'id' => 1,
            'nama' => $request->input('nama'),
            'jenkel' => $request->input('jenkel'),
            'deskripsi' => $request->input('deskripsi'),
            'notelp' => $request->input('notelp'),
            'email' => $request->input('email'),
            'alamat' => $request->input('alamat'),
            'kodepos' => $request->input('kodepos'),
            'kota' => $request->input('kota'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            ]);
        }
        // Unemployed::create($data);
        return redirect()->route('riwayatpendidikan')->with('success', 'Data berhasil ditambah');
    }
    
    public function tampildata($id){

        $data = Unemployed::find($id);
        return view('tambahpengangguran', compact('data'));
    }
    public function editdata(Request $request, $id){
        $data = Unemployed::find($id);
        $data->update($request->all());

        return redirect()->route('pengangguran')->with('success', 'Data berhasil di update');
    }

    public function destroy($id)
    {
        $data = Unemployed::find($id);
        $data->delete();
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

    // public function selectId(){
    //     $data = Unemployed::all();
    //     return view('pilihId', compact('data'))->with('i',(request()->input('page',1)-1));
    // }
}

