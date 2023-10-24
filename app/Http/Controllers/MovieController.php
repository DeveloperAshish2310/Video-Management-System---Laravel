<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {

        echo "Movie Index Page.";
        return view('panel.movie.index');
    }
}
