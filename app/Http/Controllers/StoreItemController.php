<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreItemController extends Controller
{
    public function StoreMovie(Request $request) {
        
        echo "Store Movie Route";
        magicstring($request->all());
        return;
    }

    public function StoreShow(Request $request) {
        
        echo "Store Show Route";
        magicstring($request->all());
        return;
    }

    public function StoreEpisode(Request $request) {
        
        echo "Store Episode Route";
        magicstring($request->all());
        return;
    }
}
