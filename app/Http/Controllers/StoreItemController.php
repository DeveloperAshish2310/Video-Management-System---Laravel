<?php

namespace App\Http\Controllers;

use App\Models\Movierecord;
use App\Models\Showrecord;
use App\Models\Episoderecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StoreItemController extends Controller
{
    public function StoreMovie(Request $request) {
        try {
            $tmdb_record = getTMDB($request->tmdb_id,1);
            $uploader = array(
                'uploader_name' => auth()->user()->name,
                'uploader_userid' => auth()->user()->id,
                'uploader_ip' => Request()->ip(),
            );

            $tmdbid = $request->get('tmdb_id');
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
                    'video_code' => $request->movie_code,
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
    
            $ashu = Movierecord::create($updateRecord);
            return back()->with("Success","Record Created SuccessFully");
            
        } catch (\Throwable $th) {
            // throw $th;
            return back()->with('error',"Error While Uploading.Contact Developer")->withInput($request->all());
        }


    }

    public function StoreShow(Request $request) {
        
        try {     
            $tmdb_record = getTMDB($request->show_code,1,'tv');
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
                'director' => $director['original_name'] ?? 'Not Available',
                'producer' => $producer['original_name'] ?? 'Not Available',
                'screenplay' => $screenplay['original_name'] ?? 'Not Available',
                'cast' => $maincast
            ]);
            
            $uploader = array(
                'uploader_name' => auth()->user()->name,
                'uploader_userid' => auth()->user()->id,
                'uploader_ip' => Request()->ip(),
            );
            
            $stats = [
                'budget' => $tmdb_record->budget ?? 'Not Available',
                'original_language' => $tmdb_record->original_language ?? 'Not Available',
                'revenue' => $tmdb_record->revenue ?? 'Not Available'
            ];

            $show_details = [
                'release_date' => $request->get('show_release_date','Not available'),
                'runtime' => $tmdb_record->episode_run_time[0] ?? $request->get('show_duration','Not Available'),
                'overview' => $request->get('show_description','Not Available'),
                'vote_average' => $request->get('show_rating','Not Available')
            ];

            // ` Getting Category
            $category = [];
            foreach ($tmdb_record->genres as $key => $value) {
                array_push($category,$value->name);
            }

            $uploader = array(
                'uploader_name' => auth()->user()->name,
                'uploader_userid' => auth()->user()->id,
                'uploader_ip' => Request()->ip(),
            );


            $show_details = json_encode($show_details);
            $credit = json_encode($credit);
            $stats = json_encode($stats);
            $uploader = json_encode($uploader);
            $category = json_encode($category);

            $store = [
                'name' => $request->get('show_name'),
                'tmdb_id' => $request->get('show_code'),
                'show_id' => generateRandomCode(8),
                'like' => 0,
                'dislike' => 0,
                'view_count' => 0,
                'category' => $category,
                'status' => 1,
                'show_details' => $show_details,
                'credit' => $credit,
                'stats' => $stats,
                'uploader_details' => $uploader,
                'misc_details' => '',
                'poster_path' => $request->get('poster_url'),
                'thumbnail_url' => $request->get('thumbnail_url')
            ];

            Showrecord::create($store);

            return back()->with('success',"Show Created SuccessFully");

        } catch (\Throwable $th) {
            // throw $th;
            return back()->with('error',"Error While Uploading.Contact Developer")->withInput($request->all());
        }

    }

    public function StoreEpisode(Request $request) {
        echo "Store Episode Route";

        try {
            $count = 0;

            // ` filter Array of Episode Code
            $episode_codes = $request->get('epi_code');
            $episode_codes = array_filter($episode_codes, function ($element) {
                return $element != '';
            });

            // ` filter Array of Episode Number
            $episode_numbers = $request->get('epi_number');
            $episode_numbers = array_filter($episode_numbers, function ($element) {
                return $element != '';
            });

            // check: Checking if Episode Code and Episode Number are equal
            if (count($episode_codes) != count($episode_numbers)) {
                return back()->with('error',"Episode Code and Episode Number are not equal");
            }

            
            
            // Start: Uploading Data
            foreach ($episode_codes as $index => $epi_code) {
                $tmdb = getTMDBEpisode($request->get('show_code'),$request->get('season_no'),$episode_numbers[$index],0,'tv');

                $episode_details = [
                    'release_date' => $tmdb->air_date,
                    'runtime' => $tmdb->runtime,
                    'overview' => $tmdb->overview,
                    'vote_average' => $tmdb->vote_average
                ];

                $uploader = array(
                    'uploader_name' => auth()->user()->name,
                    'uploader_userid' => auth()->user()->id,
                    'uploader_ip' => Request()->ip(),
                );
        
                $uploader = json_encode($uploader);
                $episode_details = json_encode($episode_details);
                $record  = [
                    'name' => $tmdb->name,
                    'show_id' => $request->get('show_code'),
                    'episode_number' => $episode_numbers[$index],
                    'season_num' => $request->get('season_no'),
                    'episode_code' => $epi_code,
                    'like' => 0,
                    'dislike' => 0,
                    'view_count' => 0,
                    'status' => 1,
                    'skip_part' => null,
                    'uploader_details' => $uploader,
                    'episode_details' => $episode_details,
                    'misc_details' => null,
                    'poster_path' => $tmdb->still_path,
                    'backdrop_path' => null,
                ];

                Episoderecord::create($record);
                $count++;
            }
    
            return back()->with('success',"Episode Uploaded SuccessFully. Total $count");

        } catch (\Throwable $th) {
            // throw $th;
            return back()->with('error',"Error While Uploading.Contact Developer")->withInput($request->all());
        }       


        
    }
}
