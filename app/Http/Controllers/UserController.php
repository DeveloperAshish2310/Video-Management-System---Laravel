<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(Request $request) {
        $users = User::get();

        return view('panel.users.index',compact('users'));
    }

    function edit(User $user) {
        return view('panel.users.edit',compact('user'));
    }

    function update(Request $request,User $user) {

        try {
            $username_change_limit = $user->username_change_limit - 1;
            if ($username_change_limit == 0) {
                return back()->with('error',"You Don't Have Chances to Change Username.");
            }
            
            $user->name = $request->naam;
            $user->username = $request->username;
            $user->username_change_limit = $username_change_limit;
            $user->email = $request->email;
            $user->tmdb_api_key = $request->sb_api;
            $user->videohost_api_key = $request->sb_api;
            $user->save();
            
            return back()->with('success',"Record Updated !!");
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('error',$th->getMessage());
        }
    }


}
