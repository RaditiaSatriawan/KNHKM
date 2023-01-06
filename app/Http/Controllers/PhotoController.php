<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

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
        $formData = array_merge($add,$formData);
        //  dd($request->displayemail);
        $user->posts()->create($formData);

    }
}
