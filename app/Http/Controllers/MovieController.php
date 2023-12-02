<?php

namespace App\Http\Controllers;

use App\Models\Movierecord;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(Request $request) {
        $movies = Movierecord::get();
        
        return view('panel.movie.index',compact('movies'));
    }
    
    public function addindex() {
        // ` Show Add Movie Page 
        return view('panel.movie.add');
    }

    public function action($action,Movierecord $movie) {
        
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
