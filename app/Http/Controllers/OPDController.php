<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OPDController extends Controller
{
    //
    public function opd(){
        $jumlah_kegiatan = DB::table('aktivitas')->count();  //aktivitas
        $jumlah_layanan = DB::table('pelayanan')->count();
        return view('opd.opd', compact('jumlah_kegiatan','jumlah_layanan'));
    }
}
