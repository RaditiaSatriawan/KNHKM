<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    public $table = "company";
    protected $fillable = ['companyname', 'companyrank',
    'companyserve', 'companydeco', 'desc', 'user_id'];
}
