<?php

namespace App\Http\Controllers;
use App\Models\Profil;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function pimpinan(){
        $semua = Profil::orderBy('created_at','ASC')
        ->take(5)
        ->get();
        return view('layouts.pimpinan',compact('semua'));
    }
    public function organisasi(){
        return view('layouts.organisasi');
    }
    public function maklumat(){
        return view('layouts.maklumat');
    }
}
