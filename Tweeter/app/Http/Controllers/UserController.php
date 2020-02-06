<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    function followUser(Request $request){
        if(Auth::check()){
            //do I need to re-check if the logged in user is already following the user they are trying to follow? ( so it doesnt mess up my DB)
        $follow = new \App\Follow;
        $follow->user_id = Auth::user()->id;
        $follow->followed_user = $request->name;
        $follow->save();
        return redirect('/tweetFeed');
        } else {
            return view('error');
       }
    }
    function unfollowUser(Request $request){
        if(Auth::check()){
            $name = $request->name;
            \App\Follow::destroy($name);
        }
    }
}