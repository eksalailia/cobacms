<?php

namespace App\Http\Controllers;
use App\Models\StandarPelayanan;
use Illuminate\Http\Request;

class SPController extends Controller
{
    public function index(Request $request){
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $pelayanan = StandarPelayanan::where('jenis', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $pelayanan = StandarPelayanan::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('opd.pelayanan.index', compact('pelayanan'));
    }
    public function create(){
        $data=StandarPelayanan::all();
        return view('opd.pelayanan.create', compact('data'));
    }
    public function store(Request $request){
       $request->validate([
            'jenis' => 'required',
            'komponen' => 'required',
            'uraian' => 'required'
       ]);
       StandarPelayanan::create($request->all());
       return redirect()->route('opd.pelayanan.index')
                        ->with('success','pelayanan Berhasil Ditambahkan!');
    }

    public function edit($id) {
        $data = StandarPelayanan::all();
        $pelayanan = StandarPelayanan::find($id);
        return view('opd.pelayanan.edit',compact('data','pelayanan'));
    }

    public function update(Request $request, $id)
    {
        $pelayanan = StandarPelayanan::find($id);
        $pelayanan->jenis = $request->jenis;
        $pelayanan->komponen = $request->komponen;
        $pelayanan->uraian= $request->uraian;
        $pelayanan->save();
        return redirect()->route('opd.pelayanan.index')
                        ->with('success', 'pelayanan Berhasil Diupdate!');
    }

    public function show($id)
    {
        $data= StandarPelayanan::find($id);
        return view('opd.pelayanan.show', compact('data'));
    }
    public function destroy($id) {
        // Alert::success('pelayanan Berhasi Dihapus','Sukses');
        StandarPelayanan::find($id)->delete();
        return redirect()->route('opd.pelayanan.index')
            ->with('success', 'pelayanan Berhasil Dihapus!');
    }
}


