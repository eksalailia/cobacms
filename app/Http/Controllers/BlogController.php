<?php

namespace App\Http\Controllers;
use App\Models\Aktivitas;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        $semua = Aktivitas::orderBy('created_at','DESC')
                ->take(8)
                ->get();
        return view('layouts.blogpost',compact('semua'));
    }
    public function contact(){
        return view('layouts.contact');
    }
    public function blog_details($id){
        $news = Aktivitas::find($id);
        $semua = Aktivitas::orderBy('created_at','DESC')
        ->take(4)
        ->get();
        return view('layouts.blog_details', compact('news', 'semua'));
    }
    

    public function list($id)
    {
        $semua = Aktivitas::orderBy('created_at','DESC')
                ->take(4)
                ->get();
        $news =  Aktivitas::orderBy('created_at','DESC')
                    ->where($id)
                    ->get();
        return view('layouts.list',compact('semua','news')) ;
    }

    public function cari(Request $request)
    {
        $key = $request->get('cari');
        $news = Aktivitas::where('judul','LIKE','%'.$key.'%')->get();
        $semua = Aktivitas::orderBy('created_at','DESC')
                ->take(4)
                ->get();
        return view('layouts.list',compact('news','semua')) ;
    }
}