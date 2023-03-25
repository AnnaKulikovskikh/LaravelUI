<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show(){
        return view('blog', ['title'=>'My blog', 'text'=>'This is my blog with my precise mentions']);
    }
}
