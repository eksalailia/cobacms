<?php

namespace App\Http\Controllers;
use App\Models\Permohonan;
use Illuminate\Http\Request;

class PermohonanController extends Controller
{
    public function index(Request $request){
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $permohonan = Permohonan::where('judul', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $permohonan = Permohonan::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('layouts.admin.permohonan.index', compact('permohonan'));
    }
    public function create(){
        $data=Permohonan::all();
        return view('layouts.admin.permohonan.create', compact('data'));
    }
    public function store(Request $request)
    {
        $file = $request->file('img');
        $org = $file->getClientOriginalName();
        $path = 'img';
        $file->move($path,$org);

        $permohonan = new Permohonan;
        $permohonan->judul = $request->judul;
        $permohonan->uraian = $request->uraian;
        $permohonan->img = $org;
        $permohonan->save();
        return redirect()->route('layouts.admin.permohonan.index')
                ->with('success','Permohonan Berhasil Ditambahkan!');

        if ($permohonan) {
            return redirect()->route('layouts.admin.permohonan.index');
        } else {
            return redirect()->route('layouts.admin.permohonan.index');
        }
    }

    public function edit($id) {
        $data = Permohonan::all();
        $permohonan = Permohonan::find($id);
        return view('layouts.admin.permohonan.edit',compact('data','permohonan'));
    }

    public function update(Request $request, $id)
    {
        $foto = $request->file('img');
        if ($foto == "") {
            $permohonan = Permohonan::find($id);
            $permohonan->judul = $request->judul;
            $permohonan->uraian = $request->uraian;
            $permohonan->save();
            return redirect()->route('layouts.admin.permohonan.index')
                ->with('success','Permohonan Berhasil Ditambahkan!');

           if ($permohonan) {
                return redirect()->route('layouts.admin.permohonan.index');
            } else {
                return redirect()->route('layouts.admin.permohonan.index');
            }
        } else {
            $file = $request->file('img');
            $org = $file->getClientOriginalName();
            $path = 'img';
            $file->move($path,$org);

            $permohonan = Permohonan::find($id) ;
            $permohonan->judul = $request->judul;
            $permohonan->uraian = $request->uraian;
            $permohonan->img = $org;
            $permohonan->save();
            if ($permohonan) {
                return redirect()->route('layouts.admin.permohonan.index');
            } else {
                return redirect()->route('layouts.admin.permohonan.index');
            }
        }
    }

    public function show($id)
    {
        $data= Permohonan::find($id);
        return view('layouts.admin.permohonan.show', compact('data'));
    }
    public function destroy($id) {
        // Alert::success('permohonan Berhasi Dihapus','Sukses');
        Permohonan::find($id)->delete();
        return redirect()->route('layouts.admin.permohonan.index')
            ->with('success', 'Permohonan Berhasil Dihapus!');
    }
}
