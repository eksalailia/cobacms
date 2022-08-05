<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function kegiatan(){
        return view('layouts.admin.kegiatan');
    }
    public function create_kegiatan(){
        return view('layouts.admin.create_kegiatan');
    }
    public function store(Request $request){
       $request->validate([
            'nama_kegiatan' => 'required',
            'tgl_kegiatan' => 'required',
       ]);
       Kegiatan::create_kegiatan($request->all());
       return redirect()->route('layouts.admin.kegiatan')
                        ->with('success','Kegiatan created successfully');
    }
}
