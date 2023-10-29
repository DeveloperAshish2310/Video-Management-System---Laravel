<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class DevController extends Controller
{
    public function index(Request $request) {
        magicstring(session()->all());
        return;
    }
}
