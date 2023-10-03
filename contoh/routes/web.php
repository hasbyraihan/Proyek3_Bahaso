<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnemployedController;
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
    return view('welcome');
});
Route::get('/pengangguran', [UnemployedController::class, 'index'])->name('pengangguran');

Route::get('/tambahpengangguran', [UnemployedController::class, 'tambahpengangguran'])->name('tambahpengangguran');

Route::post('/insertdata', [UnemployedController::class, 'insertdata'])->name('insertdata');

Route::get('/tampildata/{id}', [UnemployedController::class, 'tampildata'])->name('tampildata');
Route::post('/editdata/{id}', [UnemployedController::class, 'editdata'])->name('editdata');

Route::get('/delete/{id}', [UnemployedController::class, 'destroy'])->name('destroy');
