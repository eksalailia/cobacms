<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        return view('layouts.blogpost');
    }
    public function contact(){
        return view('layouts.contact');
    }
    public function blog_details(){
        return view('layouts.blog_details');
    }
}
