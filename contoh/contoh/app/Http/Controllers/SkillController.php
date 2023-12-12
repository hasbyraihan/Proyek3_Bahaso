<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\skill;
use App\Models\Unemployed;

class SkillController extends Controller
{
    // Fungsi untuk menampilkan form penambahan
    public function create()
    {
        // $skill = Skill::findOrFail($id);
        return view('skill');
    }
    
    public function index(){
        $data = skill::all();
        return view('dataSkill', compact('data'))->with('i',(request()->input('page',1)-1));
    }

    public function selectId(){
        // $data = Unemployed::all();
        return view('skill.selectId');
    }

    public function deleteskill($id)
    {
        $data = skill::find($id);
        $data->delete();
        return redirect()->route('dataSkill');
    }

    public function store(Request $request)
    {
        $request->validate([
            'namaskill' => 'required',
            'level' => 'required',
        ],
        [
            'namaskill.required' => 'Nama Perusahaan harus diisi.',
            'level.required' => 'Jabatan harus diisi.',
        ]);
    
        // Jika validasi berhasil, simpan data ke database
        skill::create([
            'id_user'=> 1,
            'level'=> $request->input('level'),
            'namaskill'=> $request->input('namaskill'),
        ]);
    
        // Redirect ke halaman lain atau kembali ke form dengan pesan sukses
        return redirect()->route('skill')->with('success', 'Data berhasil ditambah');
    }
    
}