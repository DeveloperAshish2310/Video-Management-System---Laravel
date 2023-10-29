<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    function index(Request $request) {
        return view('panel.episode.index');
    }
    
    function addindex(Request $request) {
        return view('panel.episode.add');
    }
}
