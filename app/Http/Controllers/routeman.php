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
     public function profilee() {
        return view('profilepage/index');
     }
     public function profileedit() {
      return view('profileSetting/index');
   }
}
