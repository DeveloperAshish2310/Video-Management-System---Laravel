<?php

namespace App\Http\Controllers;

use App\Models\Movierecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AutosyncController extends Controller
{
    public function singleMovie(Request $request) {

        try {
            $count = 0;

            if (AuthRole() != 'Admin') {
                return back()->with('error',"You Don't Have Access of This Page.");
            }

            $video_folder_sync_id = getConfig('video_folder_sync_id')->value;
            $video_api = getConfig('video_api')->value;
            $url = "https://api.streamwish.com/api/folder/list?key=$video_api&fld_id=$video_folder_sync_id&files=1";
            
            $response = Http::get($url);
            $response = json_decode($response->body(),true);

            if ($response['msg'] != 'OK') {
                return back()->with('error',"There was an Erro with Video Server.");
            }
            
            $files = $response['result']['files'];
            $video_files_Codes = array_column($files,'file_code');
            $video_files_Titles = array_column($files,'title');

            if ($video_files_Codes == null) {
                return back()->with('error',"There is No FIles to Sync in Folder.");
            }

            foreach ($video_files_Codes as $key => $value) {
                $filecode = $value;

                $title_array = explode(" ",$video_files_Titles[$key]);
                $tmdbid = end($title_array);
                $tmdb_record = getTMDB($tmdbid,1);
                

                // Uploading Movie
                $uploader = array(
                    'uploader_name' => auth()->user()->name,
                    'uploader_userid' => auth()->user()->id,
                    'uploader_ip' => Request()->ip(),
                );

                $crew = $tmdb_record->credits->crew;
                $director = searchCreditJob($crew,'Director');
                $producer = searchCreditJob($crew,'Producer');
                $screenplay = searchCreditJob($crew,'Writer');
        
                $maincast = [];
                foreach ($tmdb_record->credits->cast as $key => $record) {
                    $tmp_array = [
                        'name' => $record->name,
                        'profile_path' => $record->profile_path,
                        'character' => $record->character,
                    ];
                    array_push($maincast,$tmp_array);
                    if ($key >= 8) {
                        break;
                    }
                }
        
                $credit = array([
                    'director' => $director['original_name'],
                    'producer' => $producer['original_name'],
                    'screenplay' => $screenplay['original_name'] ?? '',
                    'cast' => $maincast
                ]);
        
                
                $stats = [
                    'budget' => $tmdb_record->budget,
                    'original_language' => $tmdb_record->original_language,
                    'revenue' => $tmdb_record->revenue
                ];
        
                $movie_details = [
                    'release_date' => $tmdb_record->release_date,
                    'runtime' => $tmdb_record->runtime,
                    'overview' => $tmdb_record->overview,
                    'vote_average' => $tmdb_record->vote_average
                ];
        
        
                // ` Getting Category
                $category = [];
                foreach ($tmdb_record->genres as $key => $value) {
                    array_push($category,$value->name);
                }
        
                
                $movie_details = json_encode($movie_details);
                $credit = json_encode($credit);
                $stats = json_encode($stats);
                $uploader = json_encode($uploader);
                $category = json_encode($category);
        
                $updateRecord = [
                        'name' => $tmdb_record->original_title,
                        'tmdb_id' => $tmdbid,
                        'video_code' => $filecode,
                        'movie_details' => $movie_details,
                        'likes' => 0,
                        'dislikes' => 0,
                        'view_count' => 0,
                        'status' => 1,
                        'category' => $category,
                        'uploader_details' => $uploader,
                        'credit' => $credit,
                        'stats' => $stats,
                        'language' => $tmdb_record->original_language,
                        'backdrop_path' => $tmdb_record->backdrop_path,
                        'poster_path' => $tmdb_record->poster_path,
                        'video_details' => null,
                        'misc_details' => null,
                ];
        
                // magicstring($updateRecord);
                // return;
                Movierecord::create($updateRecord);
                $count++;
                
            }

            
            return back()->with('success',"Synced $count Movies.");
        } catch (\Throwable $th) {
            throw $th;
            return back()->with('error',"There was an Error While Syncing Movies. Contact Devloper.");
        }        
        
    }
}
