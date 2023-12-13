<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\skill;
use App\Models\Unemployed;

class SkillController extends Controller
{
    public function create()
    {
        return view('skill');
    }

    public function tampilskill($id)
{
    $data = skill::where('id', $id)->first();
    return view('skill', compact('data'));
}

public function updateskill(Request $request, $id)
{
    $idUser = Auth::id();
    $data = skill::where('id_user', $idUser)->find($id);

    if ($data) {
        $data->update($request->all());
    }

    return redirect()->route('skill')->with('success', 'Data berhasil diupdate');
}
    
    public function index()
    {
        $idUser = Auth::id();
        $data = skill::where('id_user', $idUser)->get();
        return view('dataSkill', compact('data'))->with('i',(request()->input('page',1)-1));
    }

    public function destroy($id)
    {
        $data = skill::find($id);
        $data->delete();
        return redirect()->route('skill');
    }

    public function store(Request $request)
    {
        $request->validate([
            'namaskill' => 'required',
            'level' => 'required',
        ], [
            'namaskill.required' => 'Nama Perusahaan harus diisi.',
            'level.required' => 'Jabatan harus diisi.',
        ]);
    
        $idUser = Auth::id();
    
        $data = skill::create([
            'id_user' => $idUser,
            'level' => $request->input('level'),
            'namaskill' => $request->input('namaskill'),
        ]);
        
        return redirect()->route('skill', $data);
    }
}