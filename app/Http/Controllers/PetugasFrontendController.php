<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasFrontendController extends Controller
{
    public function petugasfront(){
        return view('layouts.ppid.petugas');
    }
}
