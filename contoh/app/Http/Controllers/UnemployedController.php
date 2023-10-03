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
        //dd($request->all());
        Unemployed::create($request->all());
        return redirect()->route('pengangguran')->with('success', 'Data berhasil ditambah');
    }
    public function tampildata($id){

        $data = Unemployed::find($id);
        //dd($data);
        return view('tampilkandata', compact('data'));
    }
    public function editdata(Request $request, $id){
        $data = Unemployed::find($id);
        $data->update($request->all());

        return redirect()->route('pengangguran')->with('success', 'Data berhasil di update');
    }
}
