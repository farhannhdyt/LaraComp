<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('pages.home');
    }

    public function blog() 
    {
        return view('pages.blog');
    }
}
