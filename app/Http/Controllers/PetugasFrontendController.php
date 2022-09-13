<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasFrontendController extends Controller
{
    public function petugasfront(){
        return view('layouts.ppid.petugas');
    }
    public function permohonan(){
        return view('layouts.ppid.permohonan');
    }
    public function pengajuan(){
        return view('layouts.ppid.pengajuan');
    }
    public function penyelesaian(){
        return view('layouts.ppid.penyelesaian');
    }
}
