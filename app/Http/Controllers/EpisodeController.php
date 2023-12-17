<?php

namespace App\Http\Controllers;
use App\Models\Showrecord;
use App\Models\Episoderecord;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    function index(Request $request) {

        $episodes = Episoderecord::get();
        
        
        return view('panel.episode.index',compact('episodes'));
    }
    
    function addindex(Request $request) {
        
        $show_names = Showrecord::pluck('name', 'tmdb_id');

        return view('panel.episode.add',compact('show_names'));
    }


    public function action($action,Episoderecord $movie) {
        
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
