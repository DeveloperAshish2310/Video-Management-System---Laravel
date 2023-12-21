<?php

use App\Models\Settings;
use App\Models\Episoderecord;
use Illuminate\Support\Facades\Http;
use Intervention\Image\Facades\Image;
use App\Models\media;

function  AuthRole(){
    $user = auth()->user();
    return $user->role;
}

function getConfig($key){
    return Settings::where('key',$key)->first();
}


if (!function_exists('magicstring')) {
    function magicstring($str){
        echo "<pre>";
        print_r($str);
        echo "</pre>";
    }
}

if (!function_exists('ActiveRoute')) {
    function ActiveRoute($arr,$result) {
        $cur_route = request()->route()->getName();
        if (in_array($cur_route,$arr)) {
            return $result;
        }
    }
}

if (!function_exists('getTMDBImage')) {
    function getTMDBImage($path){
        return "https://image.tmdb.org/t/p/original$path";
    }
}


if (!function_exists('searchCreditJob')) {
    function searchCreditJob($haystack = [],$needle){
        $answer = 'Nothing';
        foreach ($haystack as $key => $value) {
            if ($value->job == $needle) {
                $answer = $value;
                break;
            }
        }
        return (array) $answer;
    }
}


if (!function_exists('getTMDB')) {
    function getTMDB($tmdbid,$credit = 0,$type = 'movie') {
        $api_key = getConfig('tmdb_api')->value;
        if ($credit) {
            $url = "https://api.themoviedb.org/3/$type/$tmdbid?api_key=$api_key&language=en-US&append_to_response=credits";
        }else{
            $url = "https://api.themoviedb.org/3/$type/$tmdbid?api_key=$api_key&language=en-US";
        }
        $reponse = Http::get($url);

        // return ['url'=> $url,'response' => json_decode($reponse)];
        return json_decode($reponse);
    }
}

if (!function_exists('getTMDBEpisode')) {
    function getTMDBEpisode($tmdbid,$season = 1,$episode = 1,$credit = 0,$type = 'movie') {
        $api_key = getConfig('tmdb_api')->value;

        if ($credit) {
            $url = "https://api.themoviedb.org/3/tv/".$tmdbid."/season/".$season."/episode/".$episode."?api_key=".$api_key."&language=en-US&append_to_response=credits";
        }else{
            $url = "https://api.themoviedb.org/3/tv/".$tmdbid."/season/".$season."/episode/".$episode."?api_key=".$api_key."&language=en-US";
        }
        $reponse = Http::get($url);

        // return ['url'=> $url,'response' => json_decode($reponse)];
        return json_decode($reponse);
    }
}

if (!function_exists('generateRandomCode')) {
    function generateRandomCode($length = 8) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $randomCode = '';
        for ($i = 0; $i < $length; $i++) {
            $randomCode .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomCode;
    }
}

if (!function_exists('EpisodeCount')) {
    function EpisodeCount($showid,$season = 1){
        $episodes = Episoderecord::where('season_num',$season)->where('show_id',$showid)->count();
        return $episodes;
    }
}


if(!function_exists("generate_thumbnail")){
    function generate_thumbnail($url,$height = 170,$width = 125){
        try {
            $image = Image::make($url);
            $thumbnail = $image->resize($height, $width);

            return  $thumbnail->encode('data-url');
            // return response()->json(['thumbnail_url' => $thumbnail->encode('data-url')]);
        } catch (\Exception $e) {
            // Handle any exceptions
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}