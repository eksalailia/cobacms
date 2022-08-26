<?php

namespace App\Http\Controllers;
use App\Models\Profil;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $semua = Profil::orderBy('created_at','DESC')
        ->take(5)
        ->get();
        return view('layouts.about',compact('semua'));
    }
}
