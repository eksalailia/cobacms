<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OPDController extends Controller
{
    //
    public function opd(){
        return view('opd.opd');
    }
}
