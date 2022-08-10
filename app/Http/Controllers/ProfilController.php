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
        // $file = $request->file('img_profil');
        // $org = $file->getClientOriginalName();
        // $path = 'img_profil';
        // $file->move($path,$org);

        // $profil = new Profil;
        // $profil->nama_profil = $request->nama_profil;
        // $profil->jabatan = $request->jabatan;
        // $profil->img_profil = $org;
        // $profil->save();
        // Profil::create($request->all());
        // return redirect()->route('profil.index')
        //                 ->with('success','Profil created successfully');

        $request->validate([
            'nama_profil' => 'required',
            'jabatan' => 'required',
            'img_profil' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        if ($img = $request->file('img_profil')) {
            $destinationPath = 'img_profil/';
            $file = date('YmdHis') . "." . $img->getClientOriginalExtension();
            $img->move($destinationPath, $file);
            $input['img_profil'] = "$file";
        }
        Profil::create($input);
        return redirect()->route('profil.index')
            ->with('success','Profil created successfully.');
    }

    public function edit($id) {
        $data = Profil::all();
        $profil = Profil::find($id);
        return view('profil.edit',compact('data','profil'));
    }

    public function update(Request $request, $id)
    {
       $request->validate([
        'nama_profil' => 'required',
        'jabatan' => 'required'
    ]);

    $input = $request->all();

    if ($img = $request->file('img_profil')) {
        $destinationPath = 'img_profil/';
        $file = date('YmdHis') . "." . $img->getClientOriginalExtension();
        $img->move($destinationPath, $file);
        $input['img_profil'] = "$file";
    }else{
        unset($input['img_profil']);
    }

    $profil->update($input);

    return redirect()->route('profil.index')
                    ->with('success','Profil updated successfully');
    }

    public function show($id)
    {
        $profil= Profil::find($id);
        return view('profil.show', compact('profil'));
    }
    public function destroy($id) {
        // Alert::success('Kegiatan Berhasi Dihapus','Sukses');
        Profil::find($id)->delete();
        return redirect()->route('profil.index')
            ->with('success', 'Data Berhasil Dihapus');
    }
}
