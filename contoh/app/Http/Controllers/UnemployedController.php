<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnemployedController extends Controller
{
    public function index(){
        return view('datapengangguran');
    }
}
