<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendSPController extends Controller
{
    public function pelayanan(){
        return view('layouts.sp');
    }
}
