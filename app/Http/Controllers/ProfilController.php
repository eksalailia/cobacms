<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Profil;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(Request $request){

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

    public function store(Request $request)
    {
        $file = $request->file('img_profil');
        $org = $file->getClientOriginalName();
        $path = 'img_profil';
        $file->move($path,$org);

        $Profil = new Profil;
        $Profil->nama_profil = $request->nama_profil;
        $Profil->jabatan = $request->jabatan;
        $Profil->img_profil = $org;
        $Profil->save();
        if ($Profil) {
            return redirect()->route('profil.index');
        } else {
            return redirect()->route('profil.index');
        }
    }
    // public function store(Request $request){

    //     $request->validate([
    //         'nama_profil' => 'required',
    //         'jabatan' => 'required',
    //         'img_profil' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);

    //     $input = $request->all();
    //     if ($img = $request->file('img_profil')) {
    //         $destinationPath = 'img_profil/';
    //         $file = date('YmdHis') . "." . $img->getClientOriginalExtension();
    //         $img->move($destinationPath, $file);
    //         $input['img_profil'] = "$file";
    //     }
    //     Profil::create($input);
    //     return redirect()->route('profil.index')
    //         ->with('success','Profil Berhasil Ditambahkan!');
    // }
    public function edit() {
        return view('profil.edit')->with('user', auth()->user());
    }

    public function update(Request $request) {
        $request->user()->update([
            'password' => Hash::make($request->get('password'))
        ]);
        return redirect()->route('layouts.admin.admin');
    }

    // public function update(Request $request, $id)
    // {
    //     $profil = Profil::find($id);
    //     $request->validate([
    //     'nama_profil' => 'required',
    //     'jabatan' => 'required',
    //     'img_profil' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    // ]);

    // $input = $request->all();

    // if ($img = $request->file('img_profil')) {
    //     $destinationPath = 'img_profil/';
    //     $file = date('YmdHis') . "." . $img->getClientOriginalExtension();
    //     $img->move($destinationPath, $file);
    //     $input['img_profil'] = "$file";
    // }else{
    //     unset($input['img_profil']);
    // }

    // $profil->update($input);

    // return redirect()->route('profil.index')
    //                 ->with('success','Profil Berhasil Diupdate!');
    // }

    public function show($id)
    {
        $profil= Profil::find($id);
        return view('profil.show', compact('profil'));
    }
    public function destroy($id) {
        // Alert::success('Profil Berhasi Dihapus','Sukses');
        Profil::find($id)->delete();
        return redirect()->route('profil.index')
            ->with('success', 'Profil Berhasil Dihapus!');
    }
}
