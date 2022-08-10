<?php

namespace App\Http\Controllers;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(Request $request){
        // $kegiatan = Kegiatan::all();
        // return view('layouts.admin.kegiatan', compact('kegiatan'));

        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $profil = Profil::where('nama_profil', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $profil = Profil::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('profil.index', compact('profil'));

    }
    public function create(){
        $data=Profil::all();
        return view('profil.create', compact('data'));
    }
    public function store(Request $request){
        $file = $request->file('img_profil');
        $org = $file->getClientOriginalName();
        $path = 'img_profil';
        $file->move($path,$org);

        $profil = new Profil;
        $profil->nama_profil = $request->nama_profil;
        $profil->jabatan = $request->jabatan;
        $profil->img_profil = $org;
        $profil->save();
        Profil::create($request->all());
        return redirect()->route('profil.index')
                        ->with('success','Profil created successfully');
            }

    public function edit($id) {
        $data = Profil::all();
        $profil = Profil::find($id);
        return view('profil.edit',compact('data','profil'));
    }

    // public function update(Request $request, $id)
    // {
    //     $Profil = profil::find($id);
    //     $Profil->img_profil = $request->img_profil;
    //     $Profil->nama_profil = $request->nama_profil;
    //     $Profil->jabatan= $request->jabatan;
    //     $Profil->save();
    //     return redirect()->route('profil.index');
    // }

    public function show($id)
    {
        $data= Profil::find($id);
        return view('profil.show', compact('data'));
    }
    public function destroy($id) {
        // Alert::success('Kegiatan Berhasi Dihapus','Sukses');
        Profil::find($id)->delete();
        return redirect()->route('profil.index')
            ->with('success', 'Data Berhasil Dihapus');
    }
}
