<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class routeman extends Controller
{
    //
    public function pekerjalepas() {
       return view('projectFair/index');
    }
    public function jobseek() {
        return view('jobpage/index');
     }
     public function profile() {
        return view('profilepage/index');
     }
}
