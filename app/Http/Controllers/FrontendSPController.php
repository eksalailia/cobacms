<?php

namespace App\Http\Controllers;
use App\Models\Pelayanan;

use Illuminate\Http\Request;

class FrontendSPController extends Controller
{
    public function pelayanan(){
        $pelayanan = pelayanan::orderBy('created_at','DESC')
        ->get();
        return view('layouts.sp', compact('pelayanan'));
    }
}
