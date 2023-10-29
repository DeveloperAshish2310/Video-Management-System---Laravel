<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(Request $request) {
        return view('panel.movie.index');
    }
    
    public function addindex() {
        return view('panel.movie.add');
    }
}
