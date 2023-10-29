<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home() {        
        if (AuthRole() == 'Admin') {
           return redirect('/panel');
        }else{
           return redirect('/');
        }
    }
    
    
    public function index() {
        

        return view('index');
    }
}
