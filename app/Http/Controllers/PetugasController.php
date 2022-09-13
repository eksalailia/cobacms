<?php

namespace App\Http\Controllers;
use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index(Request $request){
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $petugas = Petugas::where('nama', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $petugas = Petugas::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('layouts.admin.petugas.index', compact('petugas'));
    }
    public function create(){
        $data=Petugas::all();
        return view('layouts.admin.petugas.create', compact('data'));
    }
    public function store(Request $request){
       $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'uraian' => 'required',
            'pendidikan' => 'required',
            'pelatihan' => 'required',
       ]);
       Petugas::create($request->all());
       return redirect()->route('layouts.admin.petugas.index')
                        ->with('success','petugas Berhasil Ditambahkan!');
    }

    public function edit($id) {
        $data = Petugas::all();
        $petugas = Petugas::find($id);
        return view('layouts.admin.petugas.edit',compact('data','petugas'));
    }

    public function update(Request $request, $id)
    {
        $petugas = Petugas::find($id);
        $petugas->nama = $request->nama;
        $petugas->jabatan = $request->jabatan;
        $petugas->uraian= $request->uraian;
        $petugas->pendidikan= $request->pendidikan;
        $petugas->pelatihan= $request->pelatihan;
        $petugas->save();
        return redirect()->route('layouts.admin.petugas.index')
                        ->with('success', 'petugas Berhasil Diupdate!');
    }

    public function show($id)
    {
        $data= Petugas::find($id);
        return view('layouts.admin.petugas.show', compact('data'));
    }
    public function destroy($id) {
        // Alert::success('petugas Berhasi Dihapus','Sukses');
        Petugas::find($id)->delete();
        return redirect()->route('layouts.admin.petugas.index')
            ->with('success', 'petugas Berhasil Dihapus!');
    }
}
