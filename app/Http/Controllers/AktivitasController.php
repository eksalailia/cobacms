<?php

namespace App\Http\Controllers;
use App\Models\Aktivitas;
use Illuminate\Http\Request;

class AktivitasController extends Controller
{
    public function index(Request $request){
        $aktivitas = Aktivitas::paginate(5);
        return view('aktivitas.index', compact('aktivitas'));
    }
    public function create(){
        $aktivitas=Aktivitas::all();
        return view('aktivitas.create', compact('aktivitas'));
    }
    public function store(Request $request){

        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'author' => 'required',
            'tgl_aktivitas' => 'required',
            'img_aktv' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        if ($img = $request->file('img_aktv')) {
            $destinationPath = 'img_aktv/';
            $file = date('YmdHis') . "." . $img->getClientOriginalExtension();
            $img->move($destinationPath, $file);
            $input['img_aktv'] = "$file";
        }

        Aktivitas::create($input);
        return redirect()->route('aktivitas.index')
            ->with('success','Aktivitas Berhasil Ditambahkan!');
    }

    public function edit($id) {
        $data = Aktivitas::all();
        $aktivitas = Aktivitas::find($id);
        return view('aktivitas.edit',compact('data','aktivitas'));
    }

    public function update(Request $request, $id)
    {
       $request->validate([
        'judul' => 'required',
        'isi' => 'required',
        'author' => 'required',
        'tgl_aktivitas'=>'required'
    ]);

    $input = $request->all();

    if ($img = $request->file('img_aktv')) {
        $destinationPath = 'img_aktv/';
        $file = date('YmdHis') . "." . $img->getClientOriginalExtension();
        $img->move($destinationPath, $file);
        $input['img_aktv'] = "$file";
    }else{
        unset($input['img_aktv']);
    }

    $aktivitas->update($input);

    return redirect()->route('aktivitas.index')
                    ->with('success','Aktivitas Berhasil Diupdate!');
    }

    public function show($id)
    {
        $aktivitas= Aktivitas::find($id);
        return view('aktivitas.show', compact('aktivitas'));
    }
    public function destroy($id) {
        // Alert::success('Profil Berhasi Dihapus','Sukses');
        Aktivitas::find($id)->delete();
        return redirect()->route('aktivitas.index')
            ->with('success', 'Aktivitas Berhasil Dihapus!');
    }
}


