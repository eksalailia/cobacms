<?php

namespace App\Http\Controllers;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index(Request $request){
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $kegiatan = Kegiatan::where('nama_kegiatan', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $kegiatan = Kegiatan::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('opd.pengumuman.index', compact('kegiatan'));
    }
    public function show($id)
    {
        $data= Kegiatan::find($id);
        return view('opd.pengumuman.show', compact('data'));
    }
}
