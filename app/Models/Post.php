<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table = "profile";
    // use HasFactory;
    protected $fillable = ['displayname', 'displayemail',
    'displayphone', 'displaycompany', 'displaycompanypostition', 'displaylocation', 'user_id'];
    
    public function getFotoUrl()
    {
        if($this->foto){
            return asset('images/images/'.$this->foto);
        }
    }
}