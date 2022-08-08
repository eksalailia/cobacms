<?php

namespace App\Http\Controllers;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
// use Alert;

class KegiatanController extends Controller
{
    public function kegiatan(Request $request){
        // $kegiatan = Kegiatan::all();
        // return view('layouts.admin.kegiatan', compact('kegiatan'));

        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $kegiatan = Kegiatan::where('nama_kegiatan', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $kegiatan = Kegiatan::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('layouts.admin.kegiatan', compact('kegiatan'));

    }
    public function create_kegiatan(){
        return view('layouts.admin.create_kegiatan');
    }
    public function store(Request $request){
       $request->validate([
            'nama_kegiatan' => 'required',
            'tgl_kegiatan' => 'required',
            // 'deskrips' => 'required'
       ]);
       Kegiatan::create($request->all());
       return redirect()->route('layouts.admin.kegiatan')
                        ->with('success','Kegiatan created successfully');
    }

    public function show($id)
    {
        $kegiatan = Kegiatan::find($id);
        return view('layouts.admin.show_kegiatan', compact('kegiatan'));
    }
    public function destroy($id) {
        // Alert::success('Kegiatan Berhasi Dihapus','Sukses');
        Kegiatan::find($id)->delete();
        return redirect()->route('layouts.admin.kegiatan')
            ->with('success', 'Data Berhasil Dihapus');
    }
}
