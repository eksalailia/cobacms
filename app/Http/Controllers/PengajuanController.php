<?php

namespace App\Http\Controllers;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index(Request $request){
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $pengajuan = Pengajuan::where('judul', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $pengajuan = Pengajuan::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('layouts.admin.pengajuan.index', compact('pengajuan'));
    }
    public function create(){
        $data=Pengajuan::all();
        return view('layouts.admin.pengajuan.create', compact('data'));
    }
    public function store(Request $request)
    {
        $file = $request->file('img');
        $org = $file->getClientOriginalName();
        $path = 'img';
        $file->move($path,$org);

        $pengajuan = new pengajuan;
        $pengajuan->judul = $request->judul;
        $pengajuan->uraian = $request->uraian;
        $pengajuan->img = $org;
        $pengajuan->save();
        if ($pengajuan) {
            return redirect()->route('layouts.admin.pengajuan.index');
        } else {
            return redirect()->route('layouts.admin.pengajuan.index');
        }
    }

    public function edit($id) {
        $data = Pengajuan::all();
        $pengajuan = Pengajuan::find($id);
        return view('layouts.admin.pengajuan.edit',compact('data','pengajuan'));
    }

    public function update(Request $request, $id)
    {
        $foto = $request->file('img');
        if ($foto == "") {
            $pengajuan = Pengajuan::find($id);
            $pengajuan->judul = $request->judul;
            $pengajuan->uraian = $request->uraian;
            $pengajuan->save();

           if ($pengajuan) {
                return redirect()->route('layouts.admin.pengajuan.index');
            } else {
                return redirect()->route('layouts.admin.pengajuan.index');
            }
        } else {
            $file = $request->file('img');
            $org = $file->getClientOriginalName();
            $path = 'img';
            $file->move($path,$org);

            $pengajuan = Pengajuan::find($id) ;
            $pengajuan->judul = $request->judul;
            $pengajuan->uraian = $request->uraian;
            $pengajuan->img = $org;
            $pengajuan->save();
            if ($pengajuan) {
                return redirect()->route('layouts.admin.pengajuan.index');
            } else {
                return redirect()->route('layouts.admin.pengajuan.index');
            }
        }
    }

    public function show($id)
    {
        $data= Pengajuan::find($id);
        return view('layouts.admin.pengajuan.show', compact('data'));
    }
    public function destroy($id) {
        // Alert::success('pengajuan Berhasi Dihapus','Sukses');
        Pengajuan::find($id)->delete();
        return redirect()->route('layouts.admin.pengajuan.index')
            ->with('success', 'pengajuan Berhasil Dihapus!');
    }
}


