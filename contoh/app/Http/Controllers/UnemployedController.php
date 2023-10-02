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
}
