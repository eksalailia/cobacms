<?php

namespace App\Http\Controllers;
use App\Models\Profil;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return view('layouts.about');
    }
}
