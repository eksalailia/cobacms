<?php

namespace App\Http\Controllers;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
// use Alert;

class KegiatanController extends Controller
{
    public function index(Request $request){
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $kegiatan = Kegiatan::where('nama_kegiatan', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $kegiatan = Kegiatan::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('kegiatan.index', compact('kegiatan'));
    }
    public function create(){
        $data=Kegiatan::all();
        return view('kegiatan.create', compact('data'));
    }
    public function store(Request $request){
       $request->validate([
            'nama_kegiatan' => 'required',
            'tgl_kegiatan' => 'required',
            'deskripsi' => 'required'
       ]);
       Kegiatan::create($request->all());
       return redirect()->route('kegiatan.index')
                        ->with('success','Kegiatan Berhasil Ditambahkan!');
    }

    public function edit($id) {
        $data = Kegiatan::all();
        $kegiatan = Kegiatan::find($id);
        return view('kegiatan.edit',compact('data','kegiatan'));
    }

    public function update(Request $request, $id)
    {
        $Kegiatan = Kegiatan::find($id);
        $Kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $Kegiatan->tgl_kegiatan = $request->tgl_kegiatan;
        $Kegiatan->deskripsi= $request->deskripsi;
        $Kegiatan->save();
        return redirect()->route('kegiatan.index')
                        ->with('success', 'Kegiatan Berhasil Diupdate!');
    }

    public function show($id)
    {
        $data= Kegiatan::find($id);
        return view('kegiatan.show', compact('data'));
    }
    public function destroy($id) {
        // Alert::success('Kegiatan Berhasi Dihapus','Sukses');
        Kegiatan::find($id)->delete();
        return redirect()->route('kegiatan.index')
            ->with('success', 'Kegiatan Berhasil Dihapus!');
    }
}
