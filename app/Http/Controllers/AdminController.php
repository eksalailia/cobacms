<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        $jumlah_pengumuman = DB::table('kegiatan')->count();  //kegiatan
        $jumlah_saran = DB::table('saran')->count();
        $jumlah_kegiatan = DB::table('aktivitas')->count();  //aktivitas
        $jumlah_profil = DB::table('profil')->count();
        return view('layouts.admin.admin',  compact('jumlah_pengumuman', 'jumlah_saran', 'jumlah_kegiatan', 'jumlah_profil'));
    }
    public function reset(){
        return view('auth.sb-login.pass');
    }
}
