<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TupoksiController extends Controller
{
    public function tupoksi(){
        return view('layouts.tupoksi');
    }
}
