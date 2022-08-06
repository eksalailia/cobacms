<?php

namespace App\Http\Controllers;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function kegiatan(){
        $kegiatan = Kegiatan::all();
        return view('layouts.admin.kegiatan', compact('kegiatan'));
    }
    public function create_kegiatan(){
        return view('layouts.admin.create_kegiatan');
    }
    public function store(Request $request){
       $request->validate([
            'nama_kegiatan' => 'required',
            'tgl_kegiatan' => 'required',
       ]);
       Kegiatan::create($request->all());
       return redirect()->route('layouts.admin.kegiatan')
                        ->with('success','Kegiatan created successfully');
    }
    public function kegiatan_destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();
        return redirect()->route('layouts.admin.kegiatan')->with('success','Kegiatan has been deleted successfully');
    }
}
