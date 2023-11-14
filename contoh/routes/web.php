<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnemployedController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\RiwayatPendidikanController;
use App\Http\Controllers\RiwayatkerjaController;
use App\Http\Controllers\SkillController;


/*

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/landing');
});

Route::get('/login_aja', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', function (){
    return view('register');
});
Route::post('/register_store',[DaftarController::class, 'store_users']);

Route::get('/master', function(){
    return view('master');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [UnemployedController::class, 'dashboard'])->name('dashboard');
    Route::get('/pengangguran', [UnemployedController::class, 'index'])->name('pengangguran');
    
    Route::get('/tambahpengangguran', [UnemployedController::class, 'tambahpengangguran'])->name('tambahpengangguran');
    
    Route::post('/insertdata', [UnemployedController::class, 'insertdata'])->name('insertdata');
    
    Route::get('/tampildata/{id}', [UnemployedController::class, 'tampildata'])->name('tampildata');
    Route::post('/editdata/{id}', [UnemployedController::class, 'editdata'])->name('editdata');
    
    Route::get('/delete/{id}', [UnemployedController::class, 'destroy'])->name('destroy');
    
    
    // Rute untuk Portofolio
    Route::get('/create_portofolio', [PortofolioController::class, 'create'])->name('portofolio.create');
    Route::post('/portofolio/tambah', [PortofolioController::class, 'store'])->name('portofolio.tambah');
    
    
    
    // Hanya menampilkan form untuk menambah riwayat pendidikan
    Route::get('/riwayat-pendidikan', [RiwayatPendidikanController::class, 'create'])->name('riwayat-pendidikan');
    
    // Menyimpan data dari form ke database
    Route::post('/riwayat-pendidikan/store', [RiwayatPendidikanController::class, 'store'])->name('riwayat-pendidikan.store');
    Route::get('/riwayatpendidikan', [RiwayatPendidikanController::class, 'store'])->name('riwayatpendidikan');

    // Hanya menampilkan form untuk menambah riwayat pekerjaan
    Route::get('/riwayat-pekerjaan', [RiwayatkerjaController::class, 'create'])->name('riwayat-pekerjaan');
    
    // Menyimpan data dari form ke database
    Route::post('/riwayat-pekerjaan/store', [RiwayatkerjaController::class, 'store'])->name('riwayat-pekerjaan.store');
    Route::get('/riwayatpekerjaan', [RiwayatkerjaController::class, 'store'])->name('riwayatpekerjaan');

        // Hanya menampilkan form untuk menambah riwayat pekerjaan
        Route::get('/skill', [SkillController::class, 'create'])->name('skill');
    
        // Menyimpan data dari form ke database
        Route::post('/skill/store', [SkillController::class, 'store'])->name('skill.store');
        Route::get('/skills', [SkillController::class, 'store'])->name('skills');
});

