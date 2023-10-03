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
}
