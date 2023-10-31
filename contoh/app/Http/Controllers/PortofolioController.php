<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Portofolio;

class PortofolioController extends Controller
{
    public function create()
    {
        return view('portofolio');
    }
      
    public function store(Request $request)
    {
        // Validasi
        $validateData = $request->validate([
            'bidang' => 'required',
            'deskripsi' => 'required',
            'file' => 'required|file'
        ]);
        $data = $request->all();

        
        // Mengunggah file
        $file = $request->file('file');
        $tujuan_upload = public_path('uploads/portofolio/');
        $file->move($tujuan_upload,$file->getClientOriginalName());
        // Simpan ke database
        $data['file'] = 'uploads/portofolio/' . $file->getClientOriginalName();


        Portofolio::create($data);
        return redirect()->route('pengangguran');
    }
}
