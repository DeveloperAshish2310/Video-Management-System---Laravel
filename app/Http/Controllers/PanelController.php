<?php

namespace App\Http\Controllers;

use App\Models\Episoderecord;
use App\Models\Movierecord;
use App\Models\Showrecord;
use App\Models\User;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function index() {

        $users = User::get();
        $show_records = Showrecord::get()->count();
        $movie_records = Movierecord::get()->count();
        $episode_records = Episoderecord::get()->count();

        return view('panel.dashboard.index',compact('users','movie_records','show_records','episode_records'));
    }
}
