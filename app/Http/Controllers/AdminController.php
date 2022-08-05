<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view('layouts.admin.admin');
    }
    public function log(){
        return view('layouts.admin.admin');
    }
}
