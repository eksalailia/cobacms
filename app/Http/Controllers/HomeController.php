<?php

namespace App\Http\Controllers;
use App\Models\Aktivitas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $latest =  Aktivitas::orderBy('created_at','DESC')
        ->where('tanggal', date('Y-m-d'))
        ->take(8)
        ->get();

        return view('layouts.main',compact('latest')) ;
    }
}
