<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movierecord;
use App\Models\Showrecord;
class WebsiteController extends Controller
{
    public function home() {        
        if (AuthRole() == 'Admin') {
           return redirect('/panel');
        }elseif(AuthRole() == 'Dev'){
            return redirect('/dev');
        }
        else{
           return redirect('/');
        }
    }
    
    
    public function index() {
        $movies = Movierecord::groupBy('tmdb_id')->orderBy('created_at','DESC')->get();
        $shows = Showrecord::groupBy('tmdb_id')->orderBy('created_at','DESC')->get();
        return view('index',compact('movies','shows'));
    }

    public function watchmovie($tmdb_id) {
        $movie = Movierecord::where('tmdb_id',$tmdb_id)->first();
        $movie_details = [];
        if ($movie->movie_details != null) {
            $movie_details = json_decode($movie->movie_details);
        }
        return view('frontend.watchMovie',compact('movie','movie_details'));
    }


}
