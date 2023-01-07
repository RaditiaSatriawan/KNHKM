<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhotoController extends Controller
{
    public function store(Request $request){
        // $name = $request->
        // $request->file('image')->storeAs('public/images/', $name)
        // dd($request->all());
        
        $add = array(
            "displayname" => $request->frontName . $request->backName,
            "displayemail" => $request->displayemail,
            "displaylocation" => $request->province . ", " . $request->country
        );
            
        $user = $request ->user(); //(Auth::user()->name);
        $formData =$request->all();
        $uid = Auth::id();
        dd(DB::table('profile')->select(['user_id'], '=', $uid)->get());
        $formData = array_merge($add,$formData);
        DB::table('profile')->select(['user_id'], '=', $uid)->delete();
        $user->posts()->create($formData);
        

    }
}
