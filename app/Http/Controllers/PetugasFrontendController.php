<?php

namespace App\Http\Controllers;
use App\Models\Petugas;
use App\Models\Permohonan;
use App\Models\Pengajuan;
use App\Models\Penyelesaian;

use Illuminate\Http\Request;

class PetugasFrontendController extends Controller
{
    public function petugasfront(){
        $petugas = petugas::orderBy('created_at','DESC')
        ->get();
        return view('layouts.ppid.petugas', compact('petugas'));
    }
    public function permohonan(){
        $permohonan = permohonan::orderBy('created_at','DESC')
        ->take(1)
        ->get();
        return view('layouts.ppid.permohonan', compact('permohonan'));
    }
    public function pengajuan(){
        $pengajuan = pengajuan::orderBy('created_at','DESC')
        ->take(1)
        ->get();
        return view('layouts.ppid.pengajuan', compact('pengajuan'));
    }
    public function penyelesaian(){
        $penyelesaian = penyelesaian::orderBy('created_at','DESC')
        ->take(1)
        ->get();
        return view('layouts.ppid.penyelesaian', compact('penyelesaian'));
    }
}
