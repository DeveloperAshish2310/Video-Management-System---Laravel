<?php

namespace App\Http\Controllers;

use App\Models\Showrecord;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    function index() {
        $shows = Showrecord::all();
        return view('panel.show.index',compact('shows'));
    }

    function addindex(Request $request) {
        return view('panel.show.add');
    }


}
