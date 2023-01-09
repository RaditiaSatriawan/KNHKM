<?php

namespace App;

class nullCheck{

public function index($check){
    if (is_null($check)){
        $check = Auth::user()->$check;
    }
    else {
        $check = '';
    }
}







}