<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    function index() {
        return view('panel.show.index');
    }

    function addindex(Request $request) {
        return view('panel.show.add');
    }


}
