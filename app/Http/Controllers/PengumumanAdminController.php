<?php

namespace App\Http\Controllers;
use App\Models\PengumumanAdmin;
use Illuminate\Http\Request;
// use Alert;

class PengumumanAdminController extends Controller
{
    public function index(Request $request){
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $pengumuman = PengumumanAdmin::where('nama_pengumuman', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $pengumuman = PengumumanAdmin::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('pengumuman.index', compact('pengumuman'));
    }
    public function create(){
        $data=PengumumanAdmin::all();
        return view('pengumuman.create', compact('data'));
    }
    public function store(Request $request){
       $request->validate([
            'nama_pengumuman' => 'required',
            'tgl_pengumuman' => 'required',
            'deskripsi' => 'required'
       ]);
       PengumumanAdmin::create($request->all());
       return redirect()->route('pengumuman.index')
                        ->with('success','Pengumuman Berhasil Ditambahkan!');
    }

    public function edit($id) {
        $data = PengumumanAdmin::all();
        $pengumuman = PengumumanAdmin::find($id);
        return view('pengumuman.edit',compact('data','pengumuman'));
    }

    public function update(Request $request, $id)
    {
        $pengumuman = PengumumanAdmin::find($id);
        $pengumuman->nama_pengumuman = $request->nama_pengumuman;
        $pengumuman->tgl_pengumuman = $request->tgl_pengumuman;
        $pengumuman->deskripsi= $request->deskripsi;
        $pengumuman->save();
        return redirect()->route('pengumuman.index')
                        ->with('success', 'Pengumuman Berhasil Diupdate!');
    }

    public function show($id)
    {
        $data= PengumumanAdmin::find($id);
        return view('pengumuman.show', compact('data'));
    }
    public function destroy($id) {
        // Alert::success('pengumuman Berhasi Dihapus','Sukses');
        PengumumanAdmin::find($id)->delete();
        return redirect()->route('pengumuman.index')
            ->with('success', 'Pengumuman Berhasil Dihapus!');
    }
}
