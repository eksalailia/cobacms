<?php

namespace App\Http\Controllers;
use App\Models\Aktivitas;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        $semua = Aktivitas::orderBy('created_at','DESC')
                ->take(4)
                ->get();
        return view('layouts.blogpost',compact('semua'));
    }
    public function contact(){
        return view('layouts.contact');
    }
    public function blog_details($id){
        $news = Aktivitas::find($id);
        $semua = Aktivitas::orderBy('created_at','DESC')
        ->take(6)
        ->get();
        return view('layouts.blog_details', compact('news', 'semua'));
    }
}
