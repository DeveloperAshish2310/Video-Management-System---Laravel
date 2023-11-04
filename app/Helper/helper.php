<?php

use App\Models\Settings;

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