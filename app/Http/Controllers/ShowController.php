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

    public function action($action,Showrecord $movie) {
        
        // Actions
        // 0 = unpublich
        // 1 = publish
        // 2 = Delete

        try {            
            if ($action == 1) {
                $movie->status = 1;
                $movie->save();
                $msg = "Movie Published";

            }elseif ($action == 0) {
                $movie->status = 0;
                $movie->save();
                $msg = "Movie Unpublished";
                
            }elseif($action == 2){
                $movie->delete();
                $msg = "Movie Deleted";
            }        
            
            return back()->with('success',"$msg SuccessFully!!");

        } catch (\Throwable $th) {
            throw $th;
        }

    }


}
