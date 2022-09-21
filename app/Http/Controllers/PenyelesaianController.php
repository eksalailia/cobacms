<?php

namespace App\Http\Controllers;
use App\Models\Penyelesaian;
use Illuminate\Http\Request;

class PenyelesaianController extends Controller
{
    public function index(Request $request){
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $penyelesaian = Penyelesaian::where('judul', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $penyelesaian = Penyelesaian::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('layouts.admin.penyelesaian.index', compact('penyelesaian'));
    }
    public function create(){
        $data=Penyelesaian::all();
        return view('layouts.admin.penyelesaian.create', compact('data'));
    }
    public function store(Request $request)
    {
        $file = $request->file('img');
        $org = $file->getClientOriginalName();
        $path = 'img';
        $file->move($path,$org);

        $penyelesaian = new penyelesaian;
        $penyelesaian->judul = $request->judul;
        $penyelesaian->uraian = $request->uraian;
        $penyelesaian->img = $org;
        $penyelesaian->save();
        return redirect()->route('layouts.admin.penyelesaian.index')
                ->with('success','Penyelesaian Berhasil Ditambahkan!');
        if ($penyelesaian) {
            return redirect()->route('layouts.admin.penyelesaian.index');
        } else {
            return redirect()->route('layouts.admin.penyelesaian.index');
        }
    }

    public function edit($id) {
        $data = Penyelesaian::all();
        $penyelesaian = Penyelesaian::find($id);
        return view('layouts.admin.penyelesaian.edit',compact('data','penyelesaian'));
    }

    public function update(Request $request, $id)
    {
        $foto = $request->file('img');
        if ($foto == "") {
            $penyelesaian = Penyelesaian::find($id);
            $penyelesaian->judul = $request->judul;
            $penyelesaian->uraian = $request->uraian;
            $penyelesaian->save();
            return redirect()->route('layouts.admin.penyelesaian.index')
                ->with('success','Penyelesaian Berhasil Ditambahkan!');

           if ($penyelesaian) {
                return redirect()->route('layouts.admin.penyelesaian.index');
            } else {
                return redirect()->route('layouts.admin.penyelesaian.index');
            }
        } else {
            $file = $request->file('img');
            $org = $file->getClientOriginalName();
            $path = 'img';
            $file->move($path,$org);

            $penyelesaian = Penyelesaian::find($id) ;
            $penyelesaian->judul = $request->judul;
            $penyelesaian->uraian = $request->uraian;
            $penyelesaian->img = $org;
            $penyelesaian->save();
            if ($penyelesaian) {
                return redirect()->route('layouts.admin.penyelesaian.index');
            } else {
                return redirect()->route('layouts.admin.penyelesaian.index');
            }
        }
    }

    public function show($id)
    {
        $data= Penyelesaian::find($id);
        return view('layouts.admin.penyelesaian.show', compact('data'));
    }
    public function destroy($id) {
        // Alert::success('penyelesaian Berhasi Dihapus','Sukses');
        Penyelesaian::find($id)->delete();
        return redirect()->route('layouts.admin.penyelesaian.index')
            ->with('success', 'Penyelesaian Berhasil Dihapus!');
    }
}


