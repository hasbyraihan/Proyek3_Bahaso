<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Portofolio;

class PortofolioController extends Controller
{
    // Menampilkan daftar portofolio
    public function index()
    {
        $portofolios = Portofolio::all();
        return view('tampilportofolio', compact('portofolios'));
    }

    // Menampilkan form untuk membuat portofolio baru
    public function create()
    {
        return view('portofolio');
    }

    // Menyimpan portofolio baru ke database
    public function store(Request $request)
{
    // Validasi request
    $validateData = $request->validate([
        'bidang' => 'required',
        'deskripsi' => 'required',
        'file' => 'required|file'
    ]);

    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $namaFile = time() . '-' . $file->getClientOriginalName(); // Membuat nama file unik
        $tujuan_upload = public_path('uploads/portofolio/'); // Direktori tujuan
        $file->move($tujuan_upload, $namaFile); // Memindahkan file ke direktori tujuan

        // Simpan nama file ke database, bukan path sementara
        $validateData['file'] = 'uploads/portofolio/' . $namaFile;
    }

    // Menyimpan data ke database
    Portofolio::create($validateData);

    return redirect()->route('tampilportofolio'); // Redirect ke halaman index
}


    // Menampilkan detail dari satu portofolio
    public function show(Portofolio $portofolio)
    {
        return view('portofolios.show', compact('portofolio'));
    }

    // Menampilkan form untuk mengedit portofolio
    public function edit(Portofolio $portofolio)
    {
        return view('editportofolio', compact('portofolio'));
    }

    // Mengupdate portofolio di database
   // Mengupdate portofolio di database
public function update(Request $request, Portofolio $portofolio)
{
    $validateData = $request->validate([
        'bidang' => 'required',
        'deskripsi' => 'required',
        'file' => 'sometimes|file'
    ]);

    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $namaFile = time() . '-' . $file->getClientOriginalName();
        $tujuan_upload = public_path('uploads/portofolio/');
        $file->move($tujuan_upload, $namaFile);

        // Update path file di data yang divalidasi
        $validateData['file'] = 'uploads/portofolio/' . $namaFile;
    }

    $portofolio->update($validateData);

    return redirect()->route('tampilportofolio');
}


    // Menghapus portofolio dari database
    public function destroy(Portofolio $portofolio)
    {
        $portofolio->delete();
        return redirect()->route('tampilportofolio');
    }
}
