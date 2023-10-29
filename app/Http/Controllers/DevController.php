<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class DevController extends Controller
{
    public function index(Request $request) {
        echo "User Role is : ". AuthRole();


        Echo "<br><br><br>All Sessions";
        magicstring(session()->all());
        Echo "User Info";
        magicstring(Auth()->user());


        // return back()->with('error',"hello");
    


        return;
    }
}
