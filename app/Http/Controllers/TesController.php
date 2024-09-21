<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;

class TesController extends Controller
{
    public function index(){
        $gejala = Gejala::all();
        return view('list-soal',compact('gejala'));
    }
}
