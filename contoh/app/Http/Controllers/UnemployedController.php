<?php

namespace App\Http\Controllers;

use App\Models\Unemployed;
use Illuminate\Http\Request;

class UnemployedController extends Controller
{
    public function index(){
        $data = Unemployed::all();
        return view('datapengangguran', compact('data'));
    }

    public function tambahpengangguran(){
        return view('tambahpengangguran');
    }

    public function insertdata(Request $request){
        Unemployed::create($request->all());
        return redirect()->route('pengangguran')->with('success', 'Data berhasil ditambah');
    }
    public function tampildata($id){

        $data = Unemployed::find($id);
        // dd($data);
        return view('tampilkandata', compact('data'));
    }
    public function editdata(Request $request, $id){
        $data = Unemployed::find($id);
        $data->update($request->all());

        return redirect()->route('pengangguran')->with('success', 'Data berhasil di update');
    }
    public function destroy($id){
        Unemployed::where('id',$id)->delete();
        // Unemployed::where('id', '>', $id)->'id'->$id+1;
        return redirect()->route('pengangguran')->with(['success'=> 'Data berhasil di hapus']);
    }

    public function tampildata2($id){

        $data = Unemployed::find($id);
        // dd($data);
        return view('tampilkandata', compact('data'));
    }
}