<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ridiscontroller extends Controller
{
    public function index() {
        $title ='welcome to my laravel page';
        return view('pagess.index')-> with('title', $title);
    }

    public function services() {
        $title ='welcome to our services page';
        return view('pagess.services')-> with('title', $title);
    }

    public function about() {
        $title ='welcome to my laravel about page';
        return view('pagess.about')-> with('title', $title);
    }
}